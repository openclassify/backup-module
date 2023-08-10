<?php namespace Visiosoft\BackupModule;

use Anomaly\Streams\Platform\Addon\AddonServiceProvider;
use Visiosoft\BackupModule\Backup\Contract\BackupRepositoryInterface;
use Visiosoft\BackupModule\Backup\BackupRepository;
use Anomaly\Streams\Platform\Model\Backup\BackupBackupEntryModel;
use Visiosoft\BackupModule\Backup\BackupModel;
use Illuminate\Routing\Router;

class BackupModuleServiceProvider extends AddonServiceProvider
{

    /**
     * Additional addon plugins.
     *
     * @type array|null
     */
    protected $plugins = [];

    /**
     * The addon Artisan commands.
     *
     * @type array|null
     */
    protected $commands = [];

    /**
     * The addon's scheduled commands.
     *
     * @type array|null
     */
    protected $schedules = [];

    /**
     * The addon API routes.
     *
     * @type array|null
     */
    protected $api = [];

    /**
     * The addon routes.
     *
     * @type array|null
     */
    protected $routes = [
        'admin/backup'           => 'Visiosoft\BackupModule\Http\Controller\Admin\BackupController@index',
        'admin/backup/create'    => 'Visiosoft\BackupModule\Http\Controller\Admin\BackupController@create',
        'admin/backup/edit/{id}' => 'Visiosoft\BackupModule\Http\Controller\Admin\BackupController@edit',
    ];

    /**
     * The addon middleware.
     *
     * @type array|null
     */
    protected $middleware = [
        //Visiosoft\BackupModule\Http\Middleware\ExampleMiddleware::class
    ];

    /**
     * Addon group middleware.
     *
     * @var array
     */
    protected $groupMiddleware = [
        //'web' => [
        //    Visiosoft\BackupModule\Http\Middleware\ExampleMiddleware::class,
        //],
    ];

    /**
     * Addon route middleware.
     *
     * @type array|null
     */
    protected $routeMiddleware = [];

    /**
     * The addon event listeners.
     *
     * @type array|null
     */
    protected $listeners = [
        //Visiosoft\BackupModule\Event\ExampleEvent::class => [
        //    Visiosoft\BackupModule\Listener\ExampleListener::class,
        //],
    ];

    /**
     * The addon alias bindings.
     *
     * @type array|null
     */
    protected $aliases = [
        //'Example' => Visiosoft\BackupModule\Example::class
    ];

    /**
     * The addon class bindings.
     *
     * @type array|null
     */
    protected $bindings = [
        BackupBackupEntryModel::class => BackupModel::class,
    ];

    /**
     * The addon singleton bindings.
     *
     * @type array|null
     */
    protected $singletons = [
        BackupRepositoryInterface::class => BackupRepository::class,
    ];

    /**
     * Additional service providers.
     *
     * @type array|null
     */
    protected $providers = [
        //\ExamplePackage\Provider\ExampleProvider::class
    ];

    /**
     * The addon view overrides.
     *
     * @type array|null
     */
    protected $overrides = [
        //'streams::errors/404' => 'module::errors/404',
        //'streams::errors/500' => 'module::errors/500',
    ];

    /**
     * The addon mobile-only view overrides.
     *
     * @type array|null
     */
    protected $mobile = [
        //'streams::errors/404' => 'module::mobile/errors/404',
        //'streams::errors/500' => 'module::mobile/errors/500',
    ];

    /**
     * Register the addon.
     */
    public function register()
    {
        // Run extra pre-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Boot the addon.
     */
    public function boot()
    {
        // Run extra post-boot registration logic here.
        // Use method injection or commands to bring in services.
    }

    /**
     * Map additional addon routes.
     *
     * @param Router $router
     */
    public function map(Router $router)
    {
        // Register dynamic routes here for example.
        // Use method injection or commands to bring in services.
    }

}