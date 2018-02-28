<?php
use yupe\components\controllers\FrontController;

/**
 * Class CategoryController
 */
class CategoryController extends FrontController
{
    /**
     * @var ProductRepository
     */
    protected $productRepository;

    /**
     * @var AttributeFilter
     */
    protected $attributeFilter;

    /**
     *
     */
    public function init()
    {
        parent::init();
        $this->productRepository = Yii::app()->getComponent('productRepository');
        $this->attributeFilter = Yii::app()->getComponent('attributesFilter');
    }

    /**
     *
     */
    public function actionIndex()
    {
        $this->render(
            'index',
            [
                'dataProvider' => new CArrayDataProvider(
                    StoreCategory::model()->published()->getMenuList(1), [
                        'id' => 'id',
                        'pagination' => false,
                    ]
                ),
            ]
        );
    }

    /**
     * @param $path
     * @throws CHttpException
     */
    public function actionView($path)
    {
        $category = StoreCategory::model()->findByPath($path);

        if (null === $category) {
            throw new CHttpException(404);
        }
        if($path=='sale') {
            $pagination = [
                'pageSize' => 100,
                'pageVar' => 'page',
            ];

            $categories = $category->getChildsArray();
            $categories[] = $category->id;

            $criteria = new CDbCriteria();
            $criteria->select = 't.*';
            $criteria->with = ['categoryRelation' => ['together' => true]];
            $criteria->addCondition('is_special=1');
            //$criteria->addInCondition('categoryRelation.category_id', $categories);
            //$criteria->addInCondition('t.category_id', $categories, 'OR');
            $criteria->group = 't.id';
            $criteria->scopes = ['published'];
            $criteria->order = 'position desc';

            $data = new CActiveDataProvider(
                Product::model(),
                [
                    'criteria' => $criteria,
                    'pagination' => $pagination,
                    'sort' => [
                        'sortVar' => 'sort',
                        'defaultOrder' => 't.position',
                    ],
                ]
            );
        } else {


            $typesSearchParam = $this->attributeFilter->getTypeAttributesForSearchFromQuery(Yii::app()->getRequest());

            $mainSearchParam = $this->attributeFilter->getMainAttributesForSearchFromQuery(
                Yii::app()->getRequest(),
                [
                    AttributeFilter::MAIN_SEARCH_PARAM_CATEGORY => Yii::app()->getRequest()->getQuery('category',
                            [$category->id]),
                ]
            );

            if (!empty($mainSearchParam) || !empty($typesSearchParam)) {
                $data = $this->productRepository->getByFilter($mainSearchParam, $typesSearchParam);
            } else {
                $data = $this->productRepository->getListForCategory($category);
            }
        }
        $this->render(
            'view',
            [
                'dataProvider' => $data,
                'category' => $category,
            ]
        );
    }
}