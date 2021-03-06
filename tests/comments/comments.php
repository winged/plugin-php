<?php
/** @var int $int This is a counter. */
$int = 0;

// there should be no docblock here
$int++;

// multi
// line
// comment
// test
$hi = 1;

/**
 * test fwd slash 12/3 comment
 */

/**
 * test backwards slash 1\2 comment
 */

/**
 * Multi line
* test with wrong indentation
*/

/**
 * Multi line
 * test with right indentation
 */

/**
 * This class acts as an example on where to position a DocBlock.
 */
class Foo
{
    /** @var string|null $title contains a title for the Foo with a max. length of 24 characters */
    protected $title = null;

    /**
     * Sets a single-line title.
     *
     * @param string $title A text with a maximum of 24 characters.
     *
     * @return void
     */
    public function setTitle($title)
    {
        // there should be no docblock here
        $this->title = $title;
    }
}

/*********************
 * Some long comment *
 *********************/

// This is a one-line c++ style comment

/* This is a multi line comment
   yet another line of comment */

/*
This is a multiple-lines comment block
that spans over multiple
lines
*/

# This is a one-line shell-style comment


for ($i = 0; $i < 10; $i++) {
    // some comment
    $a = 1;
    $b = 2;

    while (true) {
        // Some comment
        $test = 1;
    }
}

while (true) {
  // some comment
}

do {
  // some comment
} while (true);

$test = foo ?: bar(function () {
    $foo = "bar";
    // test
});

$constraint = new UniqueEntity(array(
    'message' => 'myMessage'
    // no "em" option set
));

return (
   // parens test
   // some comment
   $test
);

/***
 * Configures the tasks tabs (sub_menu)
 */

class Test {
  /******************************************
   * ORIGINAL SHIPPING DATA
   *****************************************/
   public $test;
}

/*
      some test

  */

  /*
  <a href="#"
      class="btn btn-info ladda-button"
      data-ui-component="unified-modal-opener"
      data-style="zoom-in"
      data-title="Title modal"
      data-size="md"
      data-header="true"
      data-footer="false"
      data-render="contact-form"
      data-view="Title"
      >
      <span class="ladda-label">Modal</span>
  </a>

  Options: data-render - contact-form, render, template-part
  */

/**
 * See http://example.com
 *
 * Some example code
 * ```php
 * $hello = 'world'; // This is a comment in a comment
 * ```
 */
