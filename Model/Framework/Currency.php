<?php
namespace Mehran\Toman\Model\Framework;

use Magento\Framework\App\CacheInterface;

class Currency extends \Magento\Framework\Currency
{
    public function __construct(
        CacheInterface $appCache,
        $options = null,
        $locale = null
    ) {
        if($options=="IRT") {
            $options = array();
            $options["precision"] = 0;
            $options["name"] = "Iranian Toman";
            $options["currency"] = "IRT";
            $options["symbol"] = "Toman";
            $options["format"] = "#,##0.00 ¤";
            if($locale=="fa"||$locale=="fa_IR"){
                $options["symbol"] = "تومان";
            }
        }
         if($options=="IRR") {
            $options = array();
            $options["precision"] = 0;
            $options["format"] = "#,##0.00 ¤";
          }

        parent::__construct($appCache, $options, $locale);
    }
    public function toCurrency($value = null, array $options = array())
    {
        if($this->_options['currency']=='IRT' || $this->_options['currency']=='IRR') {
            $options["precision"] = 0;
        }
        return trim(parent::toCurrency($value, $options));
    }
}
