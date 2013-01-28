<?php
class Cake_Utils_Filters
{
    public static function serialize($str) {
        return serialize($str);
    }

    public static function unserialize($str) {
        return unserialize($str);
    }

    public static function md5($str) {
        return md5($str);
    }

    public static function base64_encode($str) {
        return base64_encode($str);
    }

    public static function base64_decode($str) {
        return base64_decode($str);
    }

    public static function nl2br($str) {
        return nl2br($str);
    }

    public static function tb2sp($str) {
        return str_replace(' ', '&nbsp;', $str);
    }
    
    public static function string($str) {
        return (string) $str;
    }
}

class Twig_Extension_Utils extends Twig_Extension {

/**
 * Returns a list of filters to add to the existing list.
 *
 * @return array An array of filters
 */
	public function getFilters() {
		return array(
			'serialize' => new Twig_Filter_Function('Cake_Utils_Filters::serialize'),
			'unserialize' => new Twig_Filter_Function('Cake_Utils_Filters::unserialize'),
			'md5' => new Twig_Filter_Function('Cake_Utils_Filters::md5'),
			'base64_encode' => new Twig_Filter_Function('Cake_Utils_Filters::base64_encode'),
			'base64_decode' => new Twig_Filter_Function('Cake_Utils_Filters::base64_decode'),
			'nl2br' => new Twig_Filter_Function('Cake_Utils_Filters::nl2br'),
			'tb2sp' => new Twig_Filter_Function('Cake_Utils_Filters::tb2sp'),
			'string' => new Twig_Filter_Function('Cake_Utils_Filters::string'),
		);
	}

/**
 * Returns the name of the extension.
 *
 * @return string The extension name
 */
	public function getName() {
		return 'utils';
	}
}