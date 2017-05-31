<?php

namespace App\Models;

use SON\Db\Table;

class Article extends Table {

    protected $table = "article";

    public function _insert(array $data) {
        return "";
    }

    public function _update(array $data) {
        return "";
    }

}