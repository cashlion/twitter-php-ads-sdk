<?php
/**
 * Created by PhpStorm.
 * User: hborras
 * Date: 17/04/16
 * Time: 22:41.
 */
namespace Hborras\TwitterAdsSDK\TwitterAds\Creative;

use Hborras\TwitterAdsSDK\TwitterAds\Resource;

class AppDownloadCard extends Resource
{
    const RESOURCE_COLLECTION = 'accounts/{account_id}/cards/app_download';
    const RESOURCE = 'accounts/{account_id}/cards/app_download/{id}';

    /** Read Only */
    protected $id;
    protected $preview_url;
    protected $created_at;
    protected $updated_at;
    protected $deleted;

    protected $properties = [
        'name',
        'app_country_code',
        'iphone_app_id',
        'iphone_deep_link',
        'ipad_app_id',
        'ipad_deep_link',
        'googleplay_app_id',
        'googleplay_deep_link',
        'app_cta',
        'custom_icon_media_id',
        'custom_app_description',
    ];

    /** Writable */
    protected $name;
    protected $app_country_code;
    protected $iphone_app_id;
    protected $iphone_deep_link;
    protected $ipad_app_id;
    protected $ipad_deep_link;
    protected $googleplay_app_id;
    protected $googleplay_deep_link;
    protected $app_cta;
    protected $custom_icon_media_id;
    protected $custom_app_description;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getPreviewUrl()
    {
        return $this->preview_url;
    }

    /**
     * @return mixed
     */
    public function getCreatedAt()
    {
        return $this->created_at;
    }

    /**
     * @return mixed
     */
    public function getUpdatedAt()
    {
        return $this->updated_at;
    }

    /**
     * @return mixed
     */
    public function getDeleted()
    {
        return $this->deleted;
    }

    /**
     * @return array
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * @param array $properties
     */
    public function setProperties($properties)
    {
        $this->properties = $properties;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getAppCountryCode()
    {
        return $this->app_country_code;
    }

    /**
     * @param mixed $app_country_code
     */
    public function setAppCountryCode($app_country_code)
    {
        $this->app_country_code = $app_country_code;
    }

    /**
     * @return mixed
     */
    public function getIphoneAppId()
    {
        return $this->iphone_app_id;
    }

    /**
     * @param mixed $iphone_app_id
     */
    public function setIphoneAppId($iphone_app_id)
    {
        $this->iphone_app_id = $iphone_app_id;
    }

    /**
     * @return mixed
     */
    public function getIphoneDeepLink()
    {
        return $this->iphone_deep_link;
    }

    /**
     * @param mixed $iphone_deep_link
     */
    public function setIphoneDeepLink($iphone_deep_link)
    {
        $this->iphone_deep_link = $iphone_deep_link;
    }

    /**
     * @return mixed
     */
    public function getIpadAppId()
    {
        return $this->ipad_app_id;
    }

    /**
     * @param mixed $ipad_app_id
     */
    public function setIpadAppId($ipad_app_id)
    {
        $this->ipad_app_id = $ipad_app_id;
    }

    /**
     * @return mixed
     */
    public function getIpadDeepLink()
    {
        return $this->ipad_deep_link;
    }

    /**
     * @param mixed $ipad_deep_link
     */
    public function setIpadDeepLink($ipad_deep_link)
    {
        $this->ipad_deep_link = $ipad_deep_link;
    }

    /**
     * @return mixed
     */
    public function getGoogleplayAppId()
    {
        return $this->googleplay_app_id;
    }

    /**
     * @param mixed $googleplay_app_id
     */
    public function setGoogleplayAppId($googleplay_app_id)
    {
        $this->googleplay_app_id = $googleplay_app_id;
    }

    /**
     * @return mixed
     */
    public function getGoogleplayDeepLink()
    {
        return $this->googleplay_deep_link;
    }

    /**
     * @param mixed $googleplay_deep_link
     */
    public function setGoogleplayDeepLink($googleplay_deep_link)
    {
        $this->googleplay_deep_link = $googleplay_deep_link;
    }

    /**
     * @return mixed
     */
    public function getAppCta()
    {
        return $this->app_cta;
    }

    /**
     * @param mixed $app_cta
     */
    public function setAppCta($app_cta)
    {
        $this->app_cta = $app_cta;
    }

    /**
     * @return mixed
     */
    public function getCustomIconMediaId()
    {
        return $this->custom_icon_media_id;
    }

    /**
     * @param mixed $custom_icon_media_id
     */
    public function setCustomIconMediaId($custom_icon_media_id)
    {
        $this->custom_icon_media_id = $custom_icon_media_id;
    }

    /**
     * @return mixed
     */
    public function getCustomAppDescription()
    {
        return $this->custom_app_description;
    }

    /**
     * @param mixed $custom_app_description
     */
    public function setCustomAppDescription($custom_app_description)
    {
        $this->custom_app_description = $custom_app_description;
    }
}
