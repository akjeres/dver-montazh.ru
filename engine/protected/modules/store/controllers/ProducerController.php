<?php
use yupe\components\controllers\FrontController;

/**
 * Class ProducerController
 */
class ProducerController extends FrontController
{
    /**
     * @var ProductRepository
     */
    protected $productRepository;

    /**
     *
     */
    public function init()
    {
        $this->productRepository = Yii::app()->getComponent('productRepository');

        parent::init();
    }

    /**
     *
     */
    public function actionIndex()
    {
        $this->render(
            'index',
            [
                'brands' => Producer::model()->getAllDataProvider(),
            ]
        );
    }

    /**
     * @param $slug
     * @throws CHttpException
     */
    public function actionView($slug)
    {
        $producer = Producer::model()->getBySlug($slug);

        if (!$producer) {
            throw new CHttpException(404, Yii::t('StoreModule.store', 'Page not found!'));
        }

        /*$data = Yii::app()->getRequest()->getQueryString() ? $this->productRepository->getByFilter(
            AttributeFilter::getBrandMainAttributesForSearchFromQuery(
                Yii::app()->getRequest(),
                [AttributeFilter::MAIN_SEARCH_PARAM_PRODUCER => [$producer->id]]
            ),
            AttributeFilter::getTypeAttributesForSearchFromQuery(Yii::app()->getRequest())
        ) : $this->productRepository->getByBrandProvider($producer);
*/
        $criteria = new CDbCriteria();
        $criteria->condition = 'producer_id = :producer_id';
        $criteria->scopes = ['published'];
        $criteria->params = [
            ':producer_id' => $producer->id,
        ];

        $data = new CActiveDataProvider(
            Product::model(), [
                'criteria' => $criteria,
                'pagination' => [
                    'pageSize' => (int)Yii::app()->getModule('store')->itemsPerPage,
                    'pageVar' => 'page',
                ],
                'sort' => [
                    'sortVar' => 'sort',
                    'defaultOrder' => 't.position desc',
                ],
            ]
        );

        $this->render(
            'view',
            [
                'brand' => $producer,
                'products' => $data,
            ]
        );
    }
}
