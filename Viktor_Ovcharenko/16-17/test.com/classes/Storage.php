<?php

class Storage {
    private $list = [];
    private $storagePath ='';
    private $pages = 1;

    public function __construct($storagePath) {
        $this->storagePath = $storagePath;
        if(file_exists($_SERVER['DOCUMENT_ROOT'].'./'. $this->storagePath)) {
            if(filesize($_SERVER['DOCUMENT_ROOT'].'./'. $this->storagePath) > 0) {
                $this->load();
            }
        }
    }
    
    public function __destruct() {
        $this->save();
    }

    public function add(Review $review) { //add new review
        $this->list[] = $review;
    }

    public function save() { //save review to file
        $handle = fopen($_SERVER['DOCUMENT_ROOT'].'./'. $this->storagePath, 'w+');
        fwrite($handle, serialize($this->list));
        fclose($handle);
    }

    public function load() { //load reviews from file
        $this->list = unserialize(file_get_contents($_SERVER['DOCUMENT_ROOT'].'./'. $this->storagePath));
    }

    public function all($order = ['date' => 'desc']) {
        uasort($this->list, function ($first, $second) use ($order){
            $propName = array_keys($order)[0];
            if($order[$propName] === 'desc'){//сортирует по убыванию
                if($first->$propName > $second->$propName) {
                    return 1;
                }else{
                    return -1;
                }
            }else{//сортируют по возрастанию
                if($first->$propName > $second->$propName) {
                    return -1;
                }else{
                    return 1;
                }
            }
        });//sort by propperty
        return $this->list;
    }

    //$count - количество отзывов на странице

    public function paginate($count){//постраничная навигация
        $arrPages = array_chunk($this->list, $count);
        $this->pages = count($arrPages);
        return $arrPages[$_REQUEST['page']];//0 - заменить на переменную с request $_REQUEST['page']
    }
    
    public function __get($name){
        return $this->$name;
    }
}