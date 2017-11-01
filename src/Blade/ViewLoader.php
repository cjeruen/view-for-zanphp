<?php namespace Com\JeRuen\Zan\View\Blade;
/**
 * Created by PhpStorm.
 * User: hui
 * Date: 2017/11/1
 * Time: 下午3:44
 */

use Illuminate\Events\Dispatcher;
use Illuminate\Filesystem\Filesystem;
use Illuminate\View\Compilers\BladeCompiler;
use Illuminate\View\Engines\CompilerEngine;
use Illuminate\View\Engines\EngineResolver;
use Illuminate\View\Factory;
use Illuminate\View\FileViewFinder;
use ZanPHP\Support\Singleton;

class ViewLoader
{
    use Singleton;

    private $loader = null;

    public function init($configs)
    {

        $file = new Filesystem();
        $compiler = new BladeCompiler($file, $configs['templateCacheDir']);

        // TODO 自定义指令
//        if (isset($configs['directiveFile']) && file_exists($configs['directiveFile'])) {
//            include $configs['directiveFile'];
//        }
//        $compiler->directive('datetime', function($timestamp) {
/*            return preg_replace('/(\(\d+\))/', '<?php echo date("Y-m-d H:i:s", $1); ?>', $timestamp);*/
//        });

        $resolver = new EngineResolver();
        $resolver->register('blade', function () use ($compiler) {
            return new CompilerEngine($compiler);
        });

        $event = new Dispatcher();
        $factory = new Factory($resolver, new FileViewFinder($file, [$configs['templateDir']]), $event);

        // if your view file extension is not php or blade.php, use this to add it
        $factory->addExtension($configs['suffix'], 'blade');

        $this->loader = $factory;

        return $this->loader;
    }

    public function getLoader()
    {
        return $this->loader;
    }

}
