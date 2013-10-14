<?php
class Hash{
    /**
     * @param $algo алгоритм md5
     * @param $data объект кодирования
     * @param $sal одинаково по всему сайту
     * @return string
     */
    //Hash::create('md5','passwordhere','SaltIfThereIsOne');
    public static function create($algo,$data,$sal){
        $context = hash_init($algo, HASH_HMAC,$sal);
        hash_update($context,$data);

        return hash_final($context);
    }
}