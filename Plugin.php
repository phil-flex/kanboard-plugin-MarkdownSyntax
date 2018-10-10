<?php

namespace Kanboard\Plugin\MarkdownSyntax;

use Kanboard\Core\Plugin\Base;

class Plugin extends Base
{

    public function initialize()
    {
        global $MarkdownSyntaxConfig;

        $this->hook->on("template:layout:css", array("template" => "plugins/MarkdownSyntax/Assets/css/prism.css"));
        $this->hook->on('template:layout:js', array('template' => 'plugins/MarkdownSyntax/Assets/js/clipboard.min.js'));
        $this->hook->on('template:layout:js', array('template' => 'plugins/MarkdownSyntax/Assets/js/prism.js'));
    }

    public function getPluginName()
    {
        return 'MarkdownSyntax';
    }

    public function getPluginDescription()
    {
        return t('This plugins allows you to add syntax highlighting for Markdown code.');
    }

    public function getPluginAuthor()
    {
        return 'Philip Chan';
    }

    public function getPluginVersion()
    {
        return '1.0.0';
    }

    public function getCompatibleVersion()
    {
        return '>=1.2.5';
    }

    public function getPluginHomepage()
    {
        return 'https://github.com/phil-flex/MarkdownSyntax';
    }

}
