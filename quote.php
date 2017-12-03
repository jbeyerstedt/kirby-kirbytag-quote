<?php
/*
 * kirby 2 tag - quote
 * boostrap style blockquotes
 *
 * copyright: Jannik Beyerstedt | http://jannikbeyerstedt.de | code@jannikbeyerstedt.de
 * license: http://www.gnu.org/licenses/gpl-3.0.txt GPLv3 License
 */

kirbytext::$tags['quote'] = array(
  'attr' => array(
    'author',
    'cite',
    'class'
  ),
  'html' => function($tag) {
    $element = brick('blockquote');

    if (c::get('quote.default_style', 'none') == 'bs') {
      $element->addClass('blockquote');
    }
    $element->addClass($tag->attr('class'));
  
    $text = brick('p', $tag->attr('quote'));
    if (c::get('quote.default_style', 'none') == 'bs') {
      $text->addClass('mb-0');
    }
    $element->append($text);

    if ($tag->attr('author') != '') {
      $footer = brick('footer', $tag->attr('author'));
      $footer->addClass('blockquote-footer');
      if ($tag->attr('cite') != '') {
        $cite = brick('cite', ' '.$tag->attr('cite'));
        $cite->attr('title', $tag->attr('cite'));
        $footer->append($cite);
      }
      $element->append($footer);
    }

    return $element;
  }
);
