<?php

namespace App\Helpers;

class Meta
{
    public $meta;
    public $open_graph;
    public $twitter;

    public function __construct($meta = [], $open_graph = [], $twitter = [])
    {
        $this->meta = $meta;
        $this->open_graph = $open_graph;
        $this->twitter = $twitter;
        return $this->getInstance();
    }

    private function getInstance(){
        $object = new \stdClass();
        $object->meta = $this->meta;
        $object->open_graph = $this->open_graph;
        $object->twitter = $this->twitter;
        return $object;
    }

    public function getMeta($paramsMeta = null)
    {
        $newMeta = new \stdClass();
        $newMeta->title = env('APP_META_TITLE');
        $newMeta->description = env('APP_META_DESCRIPTION');
        $newMeta->keyword = env('APP_META_KEYWORD');
        try {
            if (!empty($paramsMeta['title'])) {
                $newMeta->title = $paramsMeta['title'];
            }
            if (!empty($paramsMeta['description'])) {
                $newMeta->description = $paramsMeta['description'];
            }
            if (!empty($paramsMeta['keyword'])) {
                $newMeta->keyword = $paramsMeta['keyword'];
            }

            return $newMeta;
        } catch (mysql_xdevapi\Exception $err) {
            return $newMeta;
        }

    }
}
