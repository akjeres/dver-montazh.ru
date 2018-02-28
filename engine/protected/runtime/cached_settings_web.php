<?php return array (
  'basePath' => '/home/p478122/www/dver-montazh.ru/engine/protected/config/..',
  'defaultController' => 'site',
  'name' => 'Yupe!',
  'language' => 'ru',
  'sourceLanguage' => 'en',
  'theme' => 'default',
  'layout' => 'yupe',
  'charset' => 'UTF-8',
  'controllerNamespace' => 'application\\controllers',
  'preload' => 
  array (
    0 => 'log',
  ),
  'aliases' => 
  array (
    'bootstrap' => '/home/p478122/www/dver-montazh.ru/engine/vendor/clevertech/yii-booster/src',
  ),
  'import' => 
  array (
    0 => 'application.modules.yupe.extensions.tagcache.*',
    1 => 'vendor.yiiext.migrate-command.EDbMigration',
    2 => 'application.modules.category.models.*',
    3 => 'application.modules.comment.models.*',
    4 => 'application.modules.comment.events.*',
    5 => 'application.modules.comment.listeners.*',
    6 => 'application.modules.blog.models.*',
    7 => 'vendor.yiiext.nested-set-behavior.NestedSetBehavior',
    8 => 'application.modules.yupe.YupeModule',
    9 => 'application.modules.feedback.models.*',
    10 => 'application.modules.feedback.components.*',
    11 => 'application.modules.image.models.*',
    12 => 'application.modules.page.events.*',
    13 => 'application.modules.page.listeners.*',
    14 => 'application.modules.page.models.*',
    15 => 'application.modules.page.components.*',
    16 => 'application.modules.blog.listeners.SitemapGeneratorListener',
    17 => 'application.modules.news.listeners.NewsSitemapGeneratorListener',
    18 => 'application.modules.page.listeners.PageSitemapGeneratorListener',
    19 => 'application.modules.store.listeners.StoreSitemapGeneratorListener',
    20 => 'application.modules.store.models.*',
    21 => 'application.modules.store.events.*',
    22 => 'application.modules.store.listeners.*',
    23 => 'application.modules.store.components.helpers.*',
    24 => 'application.modules.user.UserModule',
    25 => 'application.modules.user.models.*',
    26 => 'application.modules.user.forms.*',
    27 => 'application.modules.user.components.*',
    28 => 'application.modules.yupe.components.validators.*',
    29 => 'application.modules.yupe.components.exceptions.*',
    30 => 'application.modules.yupe.extensions.tagcache.*',
    31 => 'application.modules.yupe.helpers.*',
    32 => 'application.modules.yupe.models.*',
    33 => 'application.modules.yupe.widgets.*',
    34 => 'application.modules.yupe.controllers.*',
    35 => 'application.modules.yupe.components.*',
  ),
  'modules' => 
  array (
    'yupe' => 
    array (
      'class' => 'application.modules.yupe.YupeModule',
      'cache' => true,
      'components' => 
      array (
        'bootstrap' => 
        array (
          'class' => 'vendor.clevertech.yii-booster.src.components.Booster',
          'coreCss' => true,
          'responsiveCss' => true,
          'yiiCss' => true,
          'jqueryCss' => true,
          'enableJS' => true,
          'fontAwesomeCss' => true,
          'enableNotifierJS' => false,
        ),
      ),
      'visualEditors' => 
      array (
        'redactor' => 
        array (
          'class' => 'yupe\\widgets\\editors\\Redactor',
        ),
        'ckeditor' => 
        array (
          'class' => 'yupe\\widgets\\editors\\CKEditor',
        ),
        'textarea' => 
        array (
          'class' => 'yupe\\widgets\\editors\\Textarea',
        ),
      ),
    ),
    'blog' => 
    array (
      'class' => 'application.modules.blog.BlogModule',
      'panelWidgets' => 
      array (
        'application.modules.blog.widgets.PanelStatWidget' => 
        array (
          'limit' => 5,
        ),
      ),
    ),
    'category' => 
    array (
      'class' => 'application.modules.category.CategoryModule',
    ),
    'comment' => 
    array (
      'class' => 'application.modules.comment.CommentModule',
      'panelWidgets' => 
      array (
        'application.modules.comment.widgets.PanelCommentStatWidget' => 
        array (
          'limit' => 5,
        ),
      ),
      'visualEditors' => 
      array (
        'redactor' => 
        array (
          'class' => 'comment\\widgets\\editors\\CommentRedactor',
        ),
        'textarea' => 
        array (
          'class' => 'yupe\\widgets\\editors\\Textarea',
        ),
      ),
    ),
    'contentblock' => 
    array (
      'class' => 'application.modules.contentblock.ContentBlockModule',
    ),
    'dictionary' => 
    array (
      'class' => 'application.modules.dictionary.DictionaryModule',
    ),
    'feedback' => 
    array (
      'class' => 'application.modules.feedback.FeedbackModule',
      'panelWidgets' => 
      array (
        'application.modules.feedback.widgets.PanelFeedbackStatWidget' => 
        array (
          'limit' => 5,
        ),
      ),
    ),
    'gallery' => 
    array (
      'class' => 'application.modules.gallery.GalleryModule',
    ),
    'homepage' => 
    array (
      'class' => 'application.modules.homepage.HomepageModule',
    ),
    'image' => 
    array (
      'class' => 'application.modules.image.ImageModule',
    ),
    'mail' => 
    array (
      'class' => 'application.modules.mail.MailModule',
    ),
    'menu' => 
    array (
      'class' => 'application.modules.menu.MenuModule',
    ),
    'news' => 
    array (
      'class' => 'application.modules.news.NewsModule',
    ),
    'page' => 
    array (
      'class' => 'application.modules.page.PageModule',
    ),
    'sitemap' => 
    array (
      'class' => 'application.modules.sitemap.SitemapModule',
    ),
    'store' => 
    array (
      'class' => 'application.modules.store.StoreModule',
    ),
    'user' => 
    array (
      'class' => 'application.modules.user.UserModule',
      'panelWidgets' => 
      array (
        'application.modules.user.widgets.PanelUserStatWidget' => 
        array (
          'limit' => 5,
        ),
      ),
      'documentRoot' => '/home/p478122/www/dver-montazh.ru',
      'avatarsDir' => 'avatars',
      'notifyEmailFrom' => 'test@test.ru',
    ),
  ),
  'behaviors' => 
  array (
    'onBeginRequest' => 
    array (
      'class' => 'yupe\\components\\urlManager\\LanguageBehavior',
    ),
    'page' => 
    array (
      'class' => 'application.modules.page.behaviors.PageBehavior',
    ),
  ),
  'params' => 
  array (
  ),
  'components' => 
  array (
    'viewRenderer' => 
    array (
      'class' => 'vendor.yiiext.twig-renderer.ETwigViewRenderer',
      'twigPathAlias' => 'vendor.twig.twig.lib.Twig',
      'fileExtension' => '.twig',
      'options' => 
      array (
        'autoescape' => true,
      ),
      'globals' => 
      array (
        'html' => 'CHtml',
      ),
      'filters' => 
      array (
        'jencode' => 'CJSON::encode',
      ),
    ),
    'debug' => 
    array (
      'class' => 'vendor.zhuravljov.yii2-debug.Yii2Debug',
      'internalUrls' => true,
    ),
    'db' => 
    array (
      'class' => 'CDbConnection',
      'connectionString' => 'mysql:host=p478122.mysql.ihc.ru;port=3306;dbname=p478122_p478122i',
      'username' => 'p478122_p478122i',
      'password' => 'VKfL34',
      'emulatePrepare' => true,
      'charset' => 'utf8',
      'enableParamLogging' => 0,
      'enableProfiling' => 0,
      'schemaCachingDuration' => 108000,
      'tablePrefix' => 'yupe_',
      'pdoClass' => 'yupe\\extensions\\NestedPDO',
    ),
    'moduleManager' => 
    array (
      'class' => 'yupe\\components\\ModuleManager',
    ),
    'eventManager' => 
    array (
      'class' => 'yupe\\components\\EventManager',
      'events' => 
      array (
        'sitemap.before.generate' => 
        array (
          0 => 
          array (
            0 => '\\SitemapGeneratorListener',
            1 => 'onGenerate',
          ),
          1 => 
          array (
            0 => '\\NewsSitemapGeneratorListener',
            1 => 'onGenerate',
          ),
          2 => 
          array (
            0 => '\\PageSitemapGeneratorListener',
            1 => 'onGenerate',
          ),
          3 => 
          array (
            0 => '\\StoreSitemapGeneratorListener',
            1 => 'onGenerate',
          ),
        ),
        'comment.add.success' => 
        array (
          0 => 
          array (
            0 => 'NewCommentListener',
            1 => 'onSuccessAddComment',
          ),
        ),
        'comment.before.add' => 
        array (
          0 => 
          array (
            0 => 'NewCommentListener',
            1 => 'onBeforeAddComment',
          ),
        ),
        'comment.after.save' => 
        array (
          0 => 
          array (
            0 => 'NewCommentListener',
            1 => 'onAfterSaveComment',
          ),
        ),
        'comment.after.delete' => 
        array (
          0 => 
          array (
            0 => 'NewCommentListener',
            1 => 'onAfterDeleteComment',
          ),
        ),
        'page.after.save' => 
        array (
          0 => 
          array (
            0 => '\\PageListener',
            1 => 'onAfterSave',
          ),
        ),
        'category.after.save' => 
        array (
          0 => 
          array (
            0 => '\\StoreCategoryListener',
            1 => 'onAfterSave',
          ),
        ),
        'user.success.registration' => 
        array (
          0 => 
          array (
            0 => 'UserManagerListener',
            1 => 'onUserRegistration',
          ),
        ),
        'user.success.registration.need.activation' => 
        array (
          0 => 
          array (
            0 => 'UserManagerListener',
            1 => 'onUserRegistrationNeedActivation',
          ),
        ),
        'user.success.password.recovery' => 
        array (
          0 => 
          array (
            0 => 'UserManagerListener',
            1 => 'onPasswordRecovery',
          ),
        ),
        'user.success.activate.password' => 
        array (
          0 => 
          array (
            0 => 'UserManagerListener',
            1 => 'onSuccessActivatePassword',
          ),
        ),
        'user.success.email.confirm' => 
        array (
          0 => 
          array (
            0 => 'UserManagerListener',
            1 => 'onSuccessEmailConfirm',
          ),
        ),
        'user.success.email.change' => 
        array (
          0 => 
          array (
            0 => 'UserManagerListener',
            1 => 'onSuccessEmailChange',
          ),
        ),
      ),
    ),
    'configManager' => 
    array (
      'class' => 'yupe\\components\\ConfigManager',
    ),
    'migrator' => 
    array (
      'class' => 'yupe\\components\\Migrator',
    ),
    'uploadManager' => 
    array (
      'class' => 'yupe\\components\\UploadManager',
    ),
    'bootstrap' => 
    array (
      'class' => 'bootstrap.components.Booster',
      'responsiveCss' => true,
      'fontAwesomeCss' => true,
    ),
    'themeManager' => 
    array (
      'class' => 'CThemeManager',
      'basePath' => '/home/p478122/www/dver-montazh.ru/engine/protected/../themes',
      'themeClass' => 'yupe\\components\\Theme',
    ),
    'cache' => 
    array (
      'class' => 'CFileCache',
      'behaviors' => 
      array (
        'clear' => 
        array (
          'class' => 'application.modules.yupe.extensions.tagcache.TaggingCacheBehavior',
        ),
      ),
    ),
    'urlManager' => 
    array (
      'class' => 'yupe\\components\\urlManager\\LangUrlManager',
      'languageInPath' => true,
      'langParam' => 'language',
      'urlFormat' => 'path',
      'urlSuffix' => '',
      'showScriptName' => false,
      'cacheID' => 'cache',
      'useStrictParsing' => true,
      'rules' => 
      array (
        '/' => '/homepage/hp/index',
        '/install/default/<action:\\w+>' => '/install/default/<action>',
        '/backend' => '/yupe/backend/index',
        '/backend/login' => '/user/account/backendlogin',
        '/backend/<action:\\w+>' => '/yupe/backend/<action>',
        '/backend/<module:\\w+>/<controller:\\w+>' => '/<module>/<controller>Backend/index',
        '/backend/<module:\\w+>/<controller:\\w+>/<action:\\w+>/<id:\\d+>' => '/<module>/<controller>Backend/<action>',
        '/backend/<module:\\w+>/<controller:\\w+>/<action:\\w+>' => '/<module>/<controller>Backend/<action>',
        '/gii/<controller:\\w+>/<action:\\w+>' => 'gii/<controller>/<action>',
        '/site/<action:\\w+>' => 'site/<action>',
        '/debug/<controller:\\w+>/<action:\\w+>' => 'debug/<controller>/<action>',
        '/post/<slug>.html' => 'blog/post/view',
        '/posts/tag/<tag>' => 'blog/post/tag',
        '/rss/blog/<blog>' => 'blog/blogRss/feed',
        '/rss/posts/' => 'blog/blogRss/feed',
        '/blogs/<slug>' => 'blog/blog/view',
        '/blogs' => 'blog/blog/index',
        '/blog/join' => 'blog/blog/join',
        '/blog/leave' => 'blog/blog/leave',
        '/blog/<slug>/members' => 'blog/blog/members',
        '/post/write' => 'blog/publisher/write',
        '/post/my' => 'blog/publisher/my',
        '/post/delete' => 'blog/publisher/delete',
        '/post/update' => 'blog/publisher/update',
        '/posts' => 'blog/post/index',
        '/posts/archive' => 'blog/archive/index',
        '/posts/categories' => 'blog/post/categories',
        '/posts/<slug>/' => 'blog/post/blog',
        '/posts/category/<slug>' => 'blog/post/category',
        '/post/imageUpload' => 'blog/publisher/imageUpload',
        '/post/imageChoose' => 'blog/publisher/imageChoose',
        '/comment/comment/captcha/refresh/<v>' => 'comment/comment/captcha/refresh/',
        '/comment/comment/captcha/<v>' => 'comment/comment/captcha/',
        '/comment/add/' => 'comment/comment/add/',
        '/comments/rss/<model>/<modelId>' => 'comment/commentRss/feed',
        '/comment/ajaxImageUpload' => 'comment/comment/ajaxImageUpload',
        '/contacts' => '/feedback/contact/index',
        '/faq' => '/feedback/contact/faq',
        '/faq/<id:\\d+>' => '/feedback/contact/faqView',
        '/feedback/contact/captcha/refresh/<v>' => '/feedback/contact/captcha/refresh',
        '/feedback/contact/captcha/<v>' => '/feedback/contact/captcha/',
        '/albums' => '/gallery/gallery/index',
        '/albums/<id:\\d+>' => '/gallery/gallery/view',
        '/albums/images/<id:\\d+>' => '/gallery/gallery/image',
        '/albums/categories' => '/gallery/galleryCategory/index',
        '/albums/<slug>' => '/gallery/galleryCategory/view',
        '/works' => '/site/works',
        '/images/<id:\\d+>' => 'gallery/gallery/image/',
        '/ww' => '/site/works',
        '/news/' => 'news/news/index',
        '/news/categories' => 'news/newsCategory/index',
        '/news/<slug>' => 'news/newsCategory/view',
        0 => 
        array (
          0 => 'news/news/view',
          'pattern' => '/news/<slug>',
          'urlSuffix' => '.html',
        ),
        1 => 
        array (
          'class' => 'application.modules.page.components.PageUrlRule',
        ),
        'sitemap.xml' => 'sitemap/sitemap/index',
        '/store' => 'store/product/index',
        '/store/search' => 'store/product/search',
        '/store/categories' => 'store/category/index',
        '/store/brand/<slug:[\\w_\\/-]+>' => 'store/producer/view',
        '/store/brands' => 'store/producer/index',
        '/store/<path:[\\w_\\/-]+>' => 'store/category/view',
        2 => 
        array (
          0 => 'store/product/view',
          'pattern' => '/store/<category:[\\w_\\/-]+>/<name:[\\w_\\/-]+>',
          'urlSuffix' => '.html',
        ),
        3 => 
        array (
          0 => 'store/product/view',
          'pattern' => '/store/<name:[\\w_\\/-]+>',
          'urlSuffix' => '.html',
        ),
        '/login' => 'user/account/login',
        '/logout' => 'user/account/logout',
        '/registration' => 'user/account/registration',
        '/recovery' => 'user/account/recovery',
        '/activate/<token>' => 'user/account/activate',
        '/confirm/<token>' => 'user/account/confirm',
        '/recovery/<token>' => 'user/account/restore',
        '/user/account/captcha/refresh/<v>' => 'user/account/captcha/refresh',
        '/user/account/captcha/<v>' => 'user/account/captcha/',
        '/users' => 'user/people/index',
        '/users/<username:\\w+>/' => 'user/people/userInfo',
        '/profile' => 'user/profile/profile',
        '/profile/password' => 'user/profile/password',
        '/profile/email' => 'user/profile/email',
      ),
    ),
    'request' => 
    array (
      'class' => 'yupe\\components\\HttpRequest',
      'enableCsrfValidation' => true,
      'csrfCookie' => 
      array (
        'httpOnly' => true,
      ),
      'csrfTokenName' => 'YUPE_TOKEN',
      'enableCookieValidation' => true,
    ),
    'session' => 
    array (
      'cookieParams' => 
      array (
        'httponly' => true,
      ),
      'class' => 'CHttpSession',
      'timeout' => 86400,
    ),
    'log' => 
    array (
      'class' => 'CLogRouter',
      'routes' => 
      array (
        0 => 
        array (
          'class' => 'CFileLogRoute',
          'levels' => 'error, warning, info, trace, profile',
        ),
      ),
    ),
    'errorHandler' => 
    array (
      'errorAction' => 'site/error',
    ),
    'postManager' => 
    array (
      'class' => 'application.modules.blog.components.PostManager',
    ),
    'commentManager' => 
    array (
      'class' => 'application.modules.comment.components.CommentManager',
    ),
    'feedback' => 
    array (
      'class' => 'application.modules.feedback.components.FeedbackService',
    ),
    'mail' => 
    array (
      'class' => 'yupe\\components\\Mail',
    ),
    'mailMessage' => 
    array (
      'class' => 'application.modules.mail.components.YMailMessage',
    ),
    'sitemapGenerator' => 
    array (
      'class' => 'application.modules.sitemap.components.SitemapGenerator',
    ),
    'money' => 
    array (
      'class' => 'application.modules.store.components.Money',
    ),
    'productRepository' => 
    array (
      'class' => 'application.modules.store.components.repository.ProductRepository',
    ),
    'categoryRepository' => 
    array (
      'class' => 'application.modules.store.components.repository.StoreCategoryRepository',
    ),
    'attributesFilter' => 
    array (
      'class' => 'application.modules.store.components.AttributeFilter',
    ),
    'user' => 
    array (
      'class' => 'application.modules.user.components.YWebUser',
      'loginUrl' => 
      array (
        0 => '/user/account/login',
      ),
      'identityCookie' => 
      array (
        'httpOnly' => true,
      ),
    ),
    'userManager' => 
    array (
      'class' => 'application.modules.user.components.UserManager',
      'hasher' => 
      array (
        'class' => 'application.modules.user.components.Hasher',
      ),
      'tokenStorage' => 
      array (
        'class' => 'application.modules.user.components.TokenStorage',
      ),
    ),
    'authenticationManager' => 
    array (
      'class' => 'application.modules.user.components.AuthenticationManager',
    ),
    'notify' => 
    array (
      'class' => 'yupe\\components\\Notify',
      'mail' => 
      array (
        'class' => 'yupe\\components\\Mail',
      ),
    ),
    'thumbnailer' => 
    array (
      'class' => 'yupe\\components\\image\\Thumbnailer',
      'options' => 
      array (
        'jpeg_quality' => 90,
        'png_compression_level' => 8,
      ),
    ),
    'ajax' => 
    array (
      'class' => 'yupe\\components\\AsyncResponse',
    ),
  ),
  'rules' => 
  array (
    '/works' => 'site/works',
  ),
);