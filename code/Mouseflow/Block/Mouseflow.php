<?php

class Magneto_Mouseflow_Block_Mouseflow extends Mage_Core_Block_Text
{
    /**
     * Render Mouseflow tracking scripts
     *
     * @return string
     */
    protected function _toHtml()
    {
        if (!Mage::helper('mouseflow')->isMouseflowAvailable()) {
            return '';
        }
        $accountId = Mage::getStoreConfig(Magneto_Mouseflow_Helper_Data::XML_PATH_ACCOUNT);
        return '
<!-- BEGIN MOUSEFLOW CODE -->
<script type="text/javascript">
//<![CDATA[
document.write(unescape("%3Cscript src=\'" + (("https:" == document.location.protocol) ? "https" : "http") + "://b.mouseflow.com/projects/'. $accountId .'.js\' type=\'text/javascript\'%3E%3C/script%3E"));
//]]>
</script>
<!-- END MOUSEFLOW CODE -->';
    }
}
