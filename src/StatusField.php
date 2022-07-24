<?php

namespace WesselPerik\StatusField;

use Laravel\Nova\Fields\Field;

class StatusField extends Field
{
    public $showOnCreation = false;
    public $showOnUpdate = false;

    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'status-field';

    /**
     * Map the values to custom attributes or conditions.
     *
     * @param array $values
     * @return $this
     */
    public function values(array $values = null)
    {
        return $this->withMeta(['values' => $values]);
    }

    /**
     * Add a tooltip to the field.
     *
     * @param string|array $value
     * @return $this
     */
    public function tooltip(string|array $value = null)
    {
        return $this->withMeta(['tooltip' => $value]);
    }

    /**
     * Add some extra field information on the detail view.
     *
     * @param string|array $value
     * @param bool $displayTooltip
     * @return $this
     */
    public function info(string|array $value = null, bool $displayTooltip = false)
    {
        return $this->withMeta(['info' => $value, 'display_tooltip' => $displayTooltip]);
    }

    /**
     * Add custom colors to icons.
     *
     * @param string|array $value
     * @return $this
     */
    public function color(string|array $value = 'current')
    {
        return $this->withMeta(['color' => $value]);
    }

    /**
     * Add custom colors to icons.
     *
     * @param bool $value
     * @return $this
     */
    public function solidIcon(bool $value = false)
    {
        return $this->withMeta(['solidIcon' => $value]);
    }

}
