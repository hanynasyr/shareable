<?php namespace RyanNielson\Shareable\Buttons;

class FacebookLike extends Button {

    /**
     * An array of default options for the twitter button.
     *
     * @var Array
     */
    protected $defaultOptions = array(
        'url' => '',
        'type' => 'standard',
        'action'=> 'like',
        'show_faces' => 'true',
        'include_share_btn' => 'false' 
    );

    /**
     * Called to render a social button.
     * @param  array  $options
     * @return string
     */
    public function render($options = array())
    {
        $options = array_merge($this->defaultOptions, $options);
        return $this->view->make('shareable::facebookLike', array('options' => $options));
    }
}