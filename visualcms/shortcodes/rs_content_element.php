<?php

use OxidEsales\VisualCmsModule\Application\Model\Media;
use OxidEsales\VisualCmsModule\Application\Model\VisualEditorShortcode;
use OxidEsales\Eshop\Core\Registry;

class rs_content_element_shortcode extends VisualEditorShortcode
{

    /**
     * @var string
     */
    protected $_sTitle = 'TSP Content Element';

    /**
     * @var string
     */
    protected $_sBackgroundColor = '#e74c3c';

    /**
     * @var string
     */
    protected $_sIcon = 'fa-cube';

    /**
     * @return void
     */
    public function install()
    {
        $this->setShortCode(basename(__FILE__, '.php'));

        $this->setOptions([
            'content' => [
                'type' => 'wysiwyg',
                'label' => 'Content'
            ],
            'backgroundColor' => [
                'type' => 'text',
                'label' => 'Background HTML-Color-Code'
            ],
            'image' => [
                'type' => 'image',
                'label' => 'Image',
                'multi' => false,
            ],
        ]);

    }

    /**
     * @param string $sContent
     * @param array $aParams
     * @return string
     */
    public function parse($sContent = '', $aParams = [])
    {
        /** @var Media $oMedia */
        $media = oxNew(Media::class);
        $image = $media->getMediaUrl($aParams['image']);

        $smarty = Registry::getUtilsView()->getSmarty();
        $smarty->assign([
            'content' => $sContent,
            'backgroundColor' => $aParams['backgroundColor'],
            'image' => $image,
        ]);

        return $smarty->fetch('rs_content_element.tpl');
    }

}