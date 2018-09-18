<?php
/*
 * kirby 3 kirbytag - quote
 * boostrap style blockquotes
 *
 * copyright: Jannik Beyerstedt | http://jannikbeyerstedt.de | code@jannikbeyerstedt.de
 * license: http://www.gnu.org/licenses/gpl-3.0.txt GPLv3 License
 */

Kirby::plugin('jbeyerstedt/quote', [
  'tags' => [
    'quote' => [
      'attr' => [
        'author',
        'class',
        'cite'
      ],
      'html' => function($tag) {
        $html = '';

        $class = $tag->class;
        if ($tag->option('quote.default_style', 'none') == 'bs') {
          $class .= ' blockquote';
        }
        $html .= '<blockquote class="' . $class . '">';


        $class_p = '';
        if ($tag->option('quote.default_style', 'none') == 'bs') {
          $class_p .= ' mb-0';
        }
        $html .= '<p class="' . $class_p . '">'. $tag->value .'</p>';


        if ($tag->author != '') {
          $html .= '<footer class="blockquote-footer">' . $tag->author . '</footer>';
          if ($tag->cite != '') {
            $html .= '<cite>' . $tag->cite . '</cite>';
          }
        }


        $html .= '</blockquote>';
        return $html;
      }
    ]
  ]
]);
