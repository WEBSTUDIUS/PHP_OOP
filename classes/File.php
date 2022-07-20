<?php

namespace classes;

class File {

    public $fp;
    public $file;

    public function __construct($file = null) {
        $this->file = $file;
        if(!is_writable($this->file)) {
            echo "File {$this->file} is not writable";
            exit;
        }
        $this->fp = fopen($this->file, 'a');
    }

    public function __destruct() {
        fclose($this->fp);
    }

    public function write($text) {
          // Записываем $somecontent в наш открытый файл.
        if (fwrite($this->fp, $text . PHP_EOL) === FALSE) {
            echo "File {$this->file} is not writable";
            exit;
        }

        // echo "Hooray! We had written ($text) into the file ($this->file) <br>";
    }

}