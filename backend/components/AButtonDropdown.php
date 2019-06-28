<?php

namespace backend\components;

use yii\bootstrap4\ButtonDropdown;
use yii\helpers\Url;
use yii\helpers\Html;
use yii\bootstrap\Button;

class AButtonDropdown extends ButtonDropdown
{
    /**
     * Generates the button dropdown.
     * @return string the rendering result.
     */
    public function renderButton()
    {
        Html::addCssClass($this->options, ['widget' => 'btn']);
        $label = $this->label;
        if ($this->encodeLabel) {
            $label = Html::encode($label);
        }

        if ($this->split) {
            $options = $this->options;
            $this->options['data-toggle'] = 'dropdown';
            Html::addCssClass($this->options, ['toggle' => 'dropdown-toggle']);
            unset($options['id']);
            $splitButton = Button::widget([
                'label' => '<span class="caret"></span>',
                'encodeLabel' => false,
                'options' => $this->options,
                'view' => $this->getView(),
            ]);
        } else {
            //$label .= ' <span class="caret"></span>';
            $options = $this->options;
            Html::addCssClass($options, ['toggle' => 'dropdown-toggle']);
            $options['data-toggle'] = 'dropdown';
            $splitButton = '';
        }

        if (isset($options['href'])) {
            if (is_array($options['href'])) {
                $options['href'] = Url::to($options['href']);
            }
        } else {
            if ($this->tagName === 'a') {
                $options['href'] = '#';
            }
        }

        return Button::widget([
                'tagName' => $this->tagName,
                'label' => $label,
                'options' => $options,
                'encodeLabel' => false,
                'view' => $this->getView(),
            ]) . "\n" . $splitButton;
    }
}