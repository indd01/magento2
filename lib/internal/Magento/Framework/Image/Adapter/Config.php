<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Magento\Framework\Image\Adapter;

class Config implements ConfigInterface, UploadConfigInterface
{
    const XML_PATH_IMAGE_ADAPTER = 'dev/image/default_adapter';

    const XML_PATH_IMAGE_ADAPTERS = 'dev/image/adapters';

    const XML_PATH_MAX_WIDTH_IMAGE = 'system/upload_configuration/max_width';

    const XML_PATH_MAX_HEIGHT_IMAGE = 'system/upload_configuration/max_height';

    /**
     * @var \Magento\Framework\App\Config\ScopeConfigInterface
     */
    protected $config;

    /**
     * @param \Magento\Framework\App\Config\ScopeConfigInterface $config
     */
    public function __construct(\Magento\Framework\App\Config\ScopeConfigInterface $config)
    {
        $this->config = $config;
    }

    /**
     * {@inherit}
     *
     * @return string
     */
    public function getAdapterAlias()
    {
        return (string)$this->config->getValue(self::XML_PATH_IMAGE_ADAPTER);
    }

    /**
     * {@inherit}
     *
     * @return mixed
     */
    public function getAdapters()
    {
        return $this->config->getValue(self::XML_PATH_IMAGE_ADAPTERS);
    }

    /**
     * Get Maximum Image Width resolution in pixels. For image resizing on client side
     *
     * @return int
     */
    public function getMaxWidth()
    {
        return $this->config->getValue(self::XML_PATH_MAX_WIDTH_IMAGE);
    }

    /**
     * Get Maximum Image Height resolution in pixels. For image resizing on client side
     *
     * @return int
     */
    public function getMaxHeight()
    {
        return $this->config->getValue(self::XML_PATH_MAX_HEIGHT_IMAGE);
    }
}
