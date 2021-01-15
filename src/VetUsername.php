<?php

namespace Vethelpdirect\VetUsername;

use Laravel\Nova\Fields\Field;
use Laravel\Nova\Http\Requests\NovaRequest;

class VetUsername extends Field
{
    /**
     * The field's component.
     *
     * @var string
     */
    public $component = 'vet-username';

    /**
     * Set the practice code used in the username a a prefix.
     *
     * @param string $practiceCode
     * @return $this
     */
    public function practiceCode(string $practiceCode)
    {
        return $this->withMeta(['practice_code' => $practiceCode]);
    }

    /**
     * Hydrate the given attribute on the model based on the incoming request.
     *
     * @param  \Laravel\Nova\Http\Requests\NovaRequest  $request
     * @param  string  $requestAttribute
     * @param  object  $model
     * @param  string  $attribute
     * @return void
     */
    protected function fillAttributeFromRequest(NovaRequest $request, $requestAttribute, $model, $attribute)
    {
        if ($request->exists($requestAttribute)) {
            $model->{$attribute} = $request[$requestAttribute];
        }
    }
}
