<?php

namespace App\Console\Commands\MakeCommands;

use Illuminate\Console\GeneratorCommand;

class MakeService extends GeneratorCommand
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $name = 'make:service';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Service class';

    /**
     * 生成に使うスタブファイルを取得する
     *
     * @return string
     */
    protected function getStub()
    {
        return __DIR__ . '/stubs/service.stub';
    }

    /**
     * クラスのデフォルトの名前空間を取得する
     *
     * @param string $rootNamespace
     *
     * @return string
     */
    protected function getDefaultNamespace($rootNamespace)
    {
        return $rootNamespace . '\Services';
    }
}
