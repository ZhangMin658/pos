@extends('layouts/contentLayoutMaster')

@section('title', 'Syntax Highlighter')

@section('content')
{{-- Basic Usage --}}
<section id="basic-usage" class="row">
    <div class=" col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Basic Usage</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>First You will need to include the prism.css and prism.js files.</p>
            <p>Prism does its best to encourage good authoring practices. Therefore, it only works with
              <code>&lt;code&gt;</code>elements, since marking up code without a <code>&lt;code&gt; </code>element is
              semantically invalid.
              <a href="http://www.w3.org/TR/html5/text-level-semantics.html#the-code-element">According to the HTML5
                spec</a>, the recommended way to define a code language is a <code>language-xxxx</code>class, which is
              what Prism uses. To make things easier however, Prism assumes that this language definition is inherited.
              Therefore, if multiple <code>&lt;code&gt; </code>elements have the same language, you can add the
              <code>language-xxxx</code>class on one of their common ancestors. This way, you can also define a
              document-wide default language, by adding a <code>language-xxxx</code>class on the
              <code>&lt;body&gt; </code>or <code>&lt;html&gt;</code>element. </p>
            <p>If you want to opt-out of highlighting for a <code>&lt;code&gt;</code>element that is a descendant of an
              element with a declared code language, you can add the class <code>language-none</code>to it (or any
              non-existing language, really).</p>
            <p>Code:</p>
            <pre><code class="language-html">&lt;pre&gt;
  &lt;code class="language-css"&gt;
  p {
      color: red
  }

  &lt;/code&gt;
  &lt;/pre&gt;
  </code></pre>
            <p>Output</p>
            <pre><code class="language-css">p {
      color: red
  }

  </code></pre>
            <p>If you use that pattern,
              the <code>&lt;pre&gt;
  </code>will automatically get the <code>language-xxxx</code>class (if it doesn't already have it) and will be styled as
              a code block.</p>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{--/ Basic Usage --}}
  {{-- Examples --}}
  <section id="examples" class="row">
    <div class=" col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Examples</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <h5 class="card-title">HTML Markup</h5>
            <p>Use the following code to use HTML syntax highlighter.</p>
            <p class="text-bold-800">Usage:</p>
            <pre> <code class="language-html"> &lt;pre&gt;
  &lt;code class="language-html"&gt;
  HTML CODE ... &lt;/code&gt;
  &lt;/pre&gt;
  </code> </pre>
            <p class="text-bold-800">Example:</p>
            <pre> <code class="language-html"> &lt;div class="card"&gt;
  &lt;img class="card-img-top" src="..." alt="Card image cap"&gt;
  &lt;div class="card-body"&gt;
  &lt;h4 class="card-title"&gt;
  Card title&lt;/h4&gt;
  &lt;p class="card-text"&gt;
  Some quick example text to build on the card title and make up the bulk of the card's content.&lt;/p&gt;
   &lt;/div&gt;
  &lt;ul class="list-group list-group-flush"&gt;
  &lt;li class="list-group-item"&gt;
  Cras justo odio&lt;/li&gt;
  &lt;li class="list-group-item"&gt;
  Dapibus ac facilisis in&lt;/li&gt;
  &lt;li class="list-group-item"&gt;
  Vestibulum at eros&lt;/li&gt;
  &lt;/ul&gt;
  &lt;div class="card-body"&gt;
  &lt;a href="#" class="card-link"&gt;
  Card link&lt;/a&gt;
  &lt;a href="#" class="card-link"&gt;
  Another link&lt;/a&gt;
  &lt;/div&gt;
  &lt;/div&gt;
  </code> </pre>
          </div>
          <div class="card-body">
            <h5 class="card-title">CSS Markup</h5>
            <p>Use the following code to use HTML syntax highlighter.</p>
            <p class="text-bold-800">Usage:</p>
            <pre> <code class="language-html"> &lt;pre&gt;
  &lt;code class="language-css"&gt;
  CSS CODE ... &lt;/code&gt;
  &lt;/pre&gt;
  </code> </pre>
            <p class="text-bold-800">Example:</p>
            <pre> <code class="language-css"> a:active {
      outline: 0;
  }

  a:hover {
      outline: 0;
  }

  abbr[title] {
      border-bottom: 1px dotted;
  }

  b, strong {
      font-weight: bold;
  }

  dfn {
      font-style: italic;
  }

  h1 {
      font-size: 2em;
      margin: 0.67em 0;
  }

  </code> </pre>
          </div>
          <div class="card-body">
            <h5 class="card-title">JS Markup</h5>
            <p>Use the following code to use HTML syntax highlighter.</p>
            <p class="text-bold-800">Usage:</p>
            <pre> <code class="language-html"> &lt;pre&gt;
  &lt;code class="language-js"&gt;
  HTML CODE ... &lt;/code&gt;
  &lt;/pre&gt;
  </code> </pre>
            <p class="text-bold-800">Example:</p>
            <pre> <code class="language-js"> init: function() {
      var scroll_theme=($('.main-menu').hasClass('menu-dark')) ? 'light': 'dark';
      this.obj=$(".main-menu-content").perfectScrollbar( {
          suppressScrollX: true, theme: scroll_theme
      }
      );
  }

  , update: function() {
      if (this.obj) {
          $(".main-menu-content").perfectScrollbar('update');
      }
  }

  , enable: function() {
      this.init();
  }

  , </code> </pre>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{--/ Examples --}}
  {{-- Line Numbers --}}
  <section id="line-numbers" class="row">
    <div class=" col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Line Numbers</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Line number at the beginning of code lines.</p>
            <p>Obviously, this is supposed to work only for code blocks (<code>&lt;pre&gt;
  &lt;code&gt;
  </code>) and not for inline code. Add class line-numbers to your desired <code>&lt;pre&gt;
  </code> and line-numbers plugin will take care.</p>
            <p>Optional: You can specify the data-start (Number) attribute on the <code>&lt;pre&gt;
  </code> element. It will shift the line counter.</p>
            <p class="text-bold-800">Usage:</p>
            <pre> <code class="language-html"> &lt;pre class="line-numbers"&gt;
  &lt;code class="language-css"&gt;
  p {
      color: red
  }

  &lt;/code&gt;
  &lt;/pre&gt;
  </code> </pre>
            <p class="text-bold-800">Example:</p>
            <pre class="line-numbers"> <code class="language-js"> (function() {
      if (typeof self==='undefined' || !self.Prism || !self.document) {
          return;
      }
  }

  ());
  </code> </pre>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{--/ Line Numbers --}}
  {{-- Line highlight --}}
  <section id="line-highlight" class="row">
    <div class=" col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Line highlight</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Highlights specific lines and/or line ranges.</p>
            <p>You specify the lines to be highlighted through the <em>data-line</em> attribute on the
              <code>&lt;pre&gt; </code> element, in the following simple format:</p>
            <ul>
              <li>A single number refers to the line with that number</li>
              <li>Ranges are denoted by two numbers, separated with a hyphen (-)</li>
              <li>Multiple line numbers or ranges are separated by commas.</li>
              <li>Whitespace is allowed anywhere and will be stripped off.</li>
            </ul>
            <p class="text-bold-800">Usage:</p>
            <pre> <code class="language-html"> &lt;pre data-line="2, 4, 8-10"&gt;
  &lt;code class="language-css"&gt;
  p {
      color: red
  }

  &lt;/code&gt;
  &lt;/pre&gt;
  </code> </pre>
            <p class="text-bold-800">Example:</p>
            <pre data-line="2, 4, 7-9"> <code class="language-css"> pre.line-numbers {
      position: relative;
      padding-left: 3.8em;
      counter-reset: linenumber;
  }

  pre.line-numbers > code {
      position: relative;
  }

  .line-numbers .line-numbers-rows {
      position: absolute;
      pointer-events: none;
      top: 0;
      font-size: 100%;
      left: -3.8em;
      width: 3em;
      /* works for line-numbers below 1000 lines */
      letter-spacing: -1px;
      border-right: 1px solid #999;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
  }

  </code> </pre>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{--/ Line highlight --}}
  {{-- Autolinker --}}
  <section id="autolinker" class="row">
    <div class=" col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Autolinker</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Converts URLs and emails in code to clickable links. <a href="#">Parses Markdown</a> links in comments.</p>
            <p>URLs and emails will be linked automatically, you don’t need to do anything. To link some text inside a
              comment to a certain URL, you may use the Markdown syntax:</p>
            <p class="text-bold-800">Usage:</p>
            <pre> <code class="language-html"> &lt;pre&gt;
  &lt;code class="language-css"&gt;
  @font-face {
      src: url(http://lea.verou.me/logo.otf);
  }

  &lt;/code&gt;
  &lt;/pre&gt;
  </code> </pre>
            <p class="text-bold-800">Example:</p>
            <pre> <code class="language-js"> @font-face {
      src: url(http://lea.verou.me/logo.otf);
      font-family: 'LeaVerou';
  }

  </code> </pre>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{--/ Autolinker --}}
  {{-- Show Invisibles --}}
  <section id="show-invisibles" class="row">
    <div class=" col-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Show Invisibles</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Show hidden characters such as tabs and line breaks.</p>
            <p class="text-bold-800">Example:</p>
            <pre> <code class="language-js"> (function() {
      if ( typeof self !=='undefined' && !self.Prism || typeof global !=='undefined' && !global.Prism) {
          return;
      }
      Prism.hooks.add('before-highlight', function(env) {
          var tokens=env.grammar;
          tokens.tab=/\t/g;
          tokens.crlf=/\r\n/g;
          tokens.lf=/\n/g;
          tokens.cr=/\r/g;
          tokens.space=/ /g;
      }
      );
  }

  )();
  </code> </pre>
          </div>
        </div>
      </div>
    </div>
  </section>
  {{--/ Show Invisibles --}}
@endsection
