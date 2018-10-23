<?php

App::uses('AppShell', 'Console/Command');

class CacheClearShell extends AppShell {

    public function startup()
    {   
        parent::startup();
    }   

    public function main() {
        $config_list = Cache::configured();
        foreach ($config_list as $value) {
            Cache::clear(false, $value);
        }   
        clearCache();
    }   
}
