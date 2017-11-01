<?php namespace Com\JeRuen\Zan\View\Blade;
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/11/1
 * Time: 下午2:42
 */
use ZanPHP\Contracts\Config\Repository;
use ZanPHP\Contracts\Foundation\Application;

class InitializeViewLoader
{
    /** @var  \ZanPHP\Contracts\Foundation\Application */
    private $application;

    /** @var  \ZanPHP\Contracts\Config\Repository */
    private $repository;

    /**
     * @param $server
     * @param int $workerId
     * @return bool|void
     */
    public function bootstrap($server, $workerId = -1)
    {

        $this->application = make(Application::class);
        $this->repository = make(Repository::class);

        $configs = [
            'templateDir' => $this->application->getBasePath() . '/' . $this->repository->get('view.template_dir'),
            'templateCacheDir' => $this->application->getBasePath() . '/' . $this->repository->get('view.template_cache_dir'),
            'suffix' => $this->repository->get('view.suffix'),
        ];

        $loader = ViewLoader::getInstance();
        $loader->init($configs);

    }

}
