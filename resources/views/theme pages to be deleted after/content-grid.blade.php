
@extends('layouts/contentLayoutMaster')

@section('title', 'Content Grid')

@section('content')
{{--Grid options--}}
<section id="grid-options" class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Grid options</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Bootstrap’s grid system uses a series of containers, rows, and columns to layout and align content. It’s
              built with <a
                href="https://developer.mozilla.org/en-US/docs/Web/CSS/CSS_Flexible_Box_Layout/Using_CSS_flexible_boxes">flexbox</a>
              and is fully responsive. Below is an example and an in-depth look at how the grid comes together.</p>
            <p>While Bootstrap uses <code>em</code>s or <code>rem</code>s for defining most sizes, <code>px</code>s are
              used for grid breakpoints and container widths. This is because the viewport width is in pixels and does not
              change with the font size.</p>
            <p>See how aspects of the Bootstrap grid system work across multiple devices with a handy table.</p>
            <div class="table-responsive">
              <table class="table table-bordered table-striped">
                <thead>
                  <tr>
                    <th></th>
                    <th class="text-center">
                      Extra small<br>
                      <small>&lt;576px</small>
                    </th>
                    <th class="text-center">
                      Small<br>
                      <small>≥576px</small>
                    </th>
                    <th class="text-center">
                      Medium<br>
                      <small>≥768px</small>
                    </th>
                    <th class="text-center">
                      Large<br>
                      <small>≥992px</small>
                    </th>
                    <th class="text-center">
                      Extra large<br>
                      <small>≥1200px</small>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th class="text-nowrap" scope="row">Max container width</th>
                    <td>None (auto)</td>
                    <td>540px</td>
                    <td>720px</td>
                    <td>960px</td>
                    <td>1140px</td>
                  </tr>
                  <tr>
                    <th class="text-nowrap" scope="row">Class prefix</th>
                    <td><code>.col-</code></td>
                    <td><code>.col-sm-</code></td>
                    <td><code>.col-md-</code></td>
                    <td><code>.col-lg-</code></td>
                    <td><code>.col-xl-</code></td>
                  </tr>
                  <tr>
                    <th class="text-nowrap" scope="row"># of columns</th>
                    <td colspan="5">12</td>
                  </tr>
                  <tr>
                    <th class="text-nowrap" scope="row">Gutter width</th>
                    <td colspan="5">30px (15px on each side of a column)</td>
                  </tr>
                  <tr>
                    <th class="text-nowrap" scope="row">Nestable</th>
                    <td colspan="5">Yes</td>
                  </tr>
                  <tr>
                    <th class="text-nowrap" scope="row">Column ordering</th>
                    <td colspan="5">Yes</td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--Auto-layout columns--}}
  <section id="auto-layout-columns" class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Auto-layout columns</h3>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Utilize breakpoint-specific column classes for easy column sizing without an explicit numbered class like
              <code class="highlighter-rouge">.col-sm-6</code>.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--Equal-width--}}
  <section id="equal-width" class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Equal-width</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>For example, here are two grid layouts that apply to every device and viewport, from <code
                class="highlighter-rouge">xs</code> to <code class="highlighter-rouge">xl</code>. Add any number of
              unit-less classes for each breakpoint you need and every column will be the same width.</p>
            <div class="bd-example-row">
              <div class="bd-example">
                <div class="container">
                  <div class="row">
                    <div class="col">
                      1 of 2
                    </div>
                    <div class="col">
                      2 of 2
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      1 of 3
                    </div>
                    <div class="col">
                      2 of 3
                    </div>
                    <div class="col">
                      3 of 3
                    </div>
                  </div>
                </div>
              </div>
              <pre>
                <code class="language-html">
                  &lt;div class="container"&gt;
                    &lt;div class="row"&gt;
                      &lt;div class="col"&gt;
                        1 of 2
                      &lt;/div&gt;
                      &lt;div class="col"&gt;
                        2 of 2
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="row"&gt;
                      &lt;div class="col"&gt;
                        1 of 3
                      &lt;/div&gt;
                      &lt;div class="col"&gt;
                        2 of 3
                      &lt;/div&gt;
                      &lt;div class="col"&gt;
                        3 of 3
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                </code>
              </pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--Setting one column width--}}
  <section id="setting-one-column-width" class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Setting one column width</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Auto-layout for flexbox grid columns also means you can set the width of one column and have the sibling
              columns automatically resize around it. You may use predefined grid classes (as shown below), grid mixins,
              or inline widths. Note that the other columns will resize no matter the width of the center column.</p>

            <div class="bd-example-row">
              <div class="bd-example">
                <div class="container">
                  <div class="row">
                    <div class="col">
                      1 of 3
                    </div>
                    <div class="col-6">
                      2 of 3 (wider)
                    </div>
                    <div class="col">
                      3 of 3
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      1 of 3
                    </div>
                    <div class="col-5">
                      2 of 3 (wider)
                    </div>
                    <div class="col">
                      3 of 3
                    </div>
                  </div>
                </div>
              </div>

              <pre>
                <code class="language-html">
                  &lt;div class="container"&gt;
                    &lt;div class="row"&gt;
                      &lt;div class="col"&gt;
                        1 of 3
                      &lt;/div&gt;
                      &lt;div class="col-6"&gt;
                        2 of 3 (wider)
                      &lt;/div&gt;
                      &lt;div class="col"&gt;
                        3 of 3
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="row"&gt;
                      &lt;div class="col"&gt;
                        1 of 3
                      &lt;/div&gt;
                      &lt;div class="col-5"&gt;
                        2 of 3 (wider)
                      &lt;/div&gt;
                      &lt;div class="col"&gt;
                        3 of 3
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                </code>
              </pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--Variable width content--}}
  <section id="variable-width-content" class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Variable width content</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Use <code class="highlighter-rouge">col-{breakpoint}-auto</code> classes to size columns based on the
              natural width of their content.</p>

            <div class="bd-example-row">
              <div class="bd-example">
                <div class="container">
                  <div class="row justify-content-md-center">
                    <div class="col col-lg-2">
                      1 of 3
                    </div>
                    <div class="col-md-auto">
                      Variable width content
                    </div>
                    <div class="col col-lg-2">
                      3 of 3
                    </div>
                  </div>
                  <div class="row">
                    <div class="col">
                      1 of 3
                    </div>
                    <div class="col-md-auto">
                      Variable width content
                    </div>
                    <div class="col col-lg-2">
                      3 of 3
                    </div>
                  </div>
                </div>
              </div>

              <pre>
                <code class="language-html">
                  &lt;div class="container"&gt;
                    &lt;div class="row justify-content-md-center"&gt;
                      &lt;div class="col col-lg-2"&gt;
                        1 of 3
                      &lt;/div&gt;
                      &lt;div class="col-md-auto"&gt;
                        Variable width content
                      &lt;/div&gt;
                      &lt;div class="col col-lg-2"&gt;
                        3 of 3
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="row"&gt;
                      &lt;div class="col"&gt;
                        1 of 3
                      &lt;/div&gt;
                      &lt;div class="col-md-auto"&gt;
                        Variable width content
                      &lt;/div&gt;
                      &lt;div class="col col-lg-2"&gt;
                        3 of 3
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                </code>
              </pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--Responsive classes--}}
  <section id="responsive-classes" class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Responsive classes</h3>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Bootstrap’s grid includes five tiers of predefined classes for building complex responsive layouts.
              Customize the size of your columns on extra small, small, medium, large, or extra large devices however you
              see fit.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--Stacked to horizontal--}}
  <section id="stacked-to-horizontal" class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Stacked to horizontal</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Don’t want your columns to simply stack in some grid tiers? Use a combination of different classes for each
              tier as needed. See the example below for a better idea of how it all works.</p>

            <div class="bd-example-row">
              <div class="bd-example">
                <div class="container">
                  {{-- Stack the columns on mobile by making one full-width and the other half-width --}}
                  <div class="row">
                    <div class="col-12 col-md-8">.col-12 .col-md-8</div>
                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                  </div>

                  {{-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop --}}
                  <div class="row">
                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                    <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                  </div>

                  {{-- Columns are always 50% wide, on mobile and desktop --}}
                  <div class="row">
                    <div class="col-6">.col-6</div>
                    <div class="col-6">.col-6</div>
                  </div>
                </div>
              </div>

              <pre>
                <code class="language-html">
                &lt;!-- Stack the columns on mobile by making one full-width and the other half-width --&gt;
                &lt;div class="row"&gt;
                  &lt;div class="col-12 col-md-8"&gt;.col-12 .col-md-8&lt;/div&gt;
                  &lt;div class="col-6 col-md-4"&gt;.col-6 .col-md-4&lt;/div&gt;
                &lt;/div&gt;

                &lt;!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop --&gt;
                &lt;div class="row"&gt;
                  &lt;div class="col-6 col-md-4"&gt;.col-6 .col-md-4&lt;/div&gt;
                  &lt;div class="col-6 col-md-4"&gt;.col-6 .col-md-4&lt;/div&gt;
                  &lt;div class="col-6 col-md-4"&gt;.col-6 .col-md-4&lt;/div&gt;
                &lt;/div&gt;

                &lt;!-- Columns are always 50% wide, on mobile and desktop --&gt;
                &lt;div class="row"&gt;
                  &lt;div class="col-6"&gt;.col-6&lt;/div&gt;
                  &lt;div class="col-6"&gt;.col-6&lt;/div&gt;
                &lt;/div&gt;
                </code>
              </pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--Alignment--}}
  <section id="alignment" class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Alignment</h3>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Use flexbox alignment utilities to vertically and horizontally align columns.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--Vertical alignment--}}
  <section id="vertical-alignment" class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Vertical alignment</h4>
        </div>
        <div class="card-content">
          <div class="card-body">

            <div class="bd-example-row bd-example-row-flex-cols">
              <div class="bd-example">
                <div class="container">
                  <div class="row align-items-start">
                    <div class="col">
                      One of three columns
                    </div>
                    <div class="col">
                      One of three columns
                    </div>
                    <div class="col">
                      One of three columns
                    </div>
                  </div>
                  <div class="row align-items-center">
                    <div class="col">
                      One of three columns
                    </div>
                    <div class="col">
                      One of three columns
                    </div>
                    <div class="col">
                      One of three columns
                    </div>
                  </div>
                  <div class="row align-items-end">
                    <div class="col">
                      One of three columns
                    </div>
                    <div class="col">
                      One of three columns
                    </div>
                    <div class="col">
                      One of three columns
                    </div>
                  </div>
                </div>
              </div>

              <pre>
                <code class="language-html">
                &lt;div class="container"&gt;
                  &lt;div class="row align-items-start"&gt;
                    &lt;div class="col"&gt;
                      One of three columns
                    &lt;/div&gt;
                    &lt;div class="col"&gt;
                      One of three columns
                    &lt;/div&gt;
                    &lt;div class="col"&gt;
                      One of three columns
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class="row align-items-center"&gt;
                    &lt;div class="col"&gt;
                      One of three columns
                    &lt;/div&gt;
                    &lt;div class="col"&gt;
                      One of three columns
                    &lt;/div&gt;
                    &lt;div class="col"&gt;
                      One of three columns
                    &lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class="row align-items-end"&gt;
                    &lt;div class="col"&gt;
                      One of three columns
                    &lt;/div&gt;
                    &lt;div class="col"&gt;
                      One of three columns
                    &lt;/div&gt;
                    &lt;div class="col"&gt;
                      One of three columns
                    &lt;/div&gt;
                  &lt;/div&gt;
                &lt;/div&gt;
                </code>
              </pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--Horizontal alignment--}}
  <section id="horizontal-alignment" class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Horizontal alignment</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <div class="bd-example-row">
              <div class="bd-example">
                <div class="container">
                  <div class="row justify-content-start">
                    <div class="col-4">
                      One of two columns
                    </div>
                    <div class="col-4">
                      One of two columns
                    </div>
                  </div>
                  <div class="row justify-content-center">
                    <div class="col-4">
                      One of two columns
                    </div>
                    <div class="col-4">
                      One of two columns
                    </div>
                  </div>
                  <div class="row justify-content-end">
                    <div class="col-4">
                      One of two columns
                    </div>
                    <div class="col-4">
                      One of two columns
                    </div>
                  </div>
                  <div class="row justify-content-around">
                    <div class="col-4">
                      One of two columns
                    </div>
                    <div class="col-4">
                      One of two columns
                    </div>
                  </div>
                  <div class="row justify-content-between">
                    <div class="col-4">
                      One of two columns
                    </div>
                    <div class="col-4">
                      One of two columns
                    </div>
                  </div>
                </div>
              </div>

              <pre>
                <code class="language-html">
                  &lt;div class="container"&gt;
                    &lt;div class="row justify-content-start"&gt;
                      &lt;div class="col-4"&gt;
                        One of two columns
                      &lt;/div&gt;
                      &lt;div class="col-4"&gt;
                        One of two columns
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="row justify-content-center"&gt;
                      &lt;div class="col-4"&gt;
                        One of two columns
                      &lt;/div&gt;
                      &lt;div class="col-4"&gt;
                        One of two columns
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="row justify-content-end"&gt;
                      &lt;div class="col-4"&gt;
                        One of two columns
                      &lt;/div&gt;
                      &lt;div class="col-4"&gt;
                        One of two columns
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="row justify-content-around"&gt;
                      &lt;div class="col-4"&gt;
                        One of two columns
                      &lt;/div&gt;
                      &lt;div class="col-4"&gt;
                        One of two columns
                      &lt;/div&gt;
                    &lt;/div&gt;
                    &lt;div class="row justify-content-between"&gt;
                      &lt;div class="col-4"&gt;
                        One of two columns
                      &lt;/div&gt;
                      &lt;div class="col-4"&gt;
                        One of two columns
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                </code>
              </pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--No gutters--}}
  <section id="no-gutters" class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">No gutters</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>The gutters between columns in our predefined grid classes can be removed with <code
                class="highlighter-rouge">.no-gutters</code>. This removes the negative <code
                class="highlighter-rouge">margin</code>s from <code class="highlighter-rouge">.row</code> and the
              horizontal <code class="highlighter-rouge">padding</code> from all immediate children columns.</p>
            <p>Here’s the source code for creating these styles. Note that column overrides are scoped to only the first
              children columns and are targeted via <a
                href="https://developer.mozilla.org/en-US/docs/Web/CSS/Attribute_selectors">attribute selector</a>. While
              this generates a more specific selector, column padding can still be further customized with <a
                href="docs/4.0/utilities/spacing/">spacing utilities</a>.</p>
            <p><strong>Need an edge-to-edge design?</strong> Drop the parent <code
                class="highlighter-rouge">.container</code> or <code class="highlighter-rouge">.container-fluid</code>.
            </p>
            <div class="bd-example-row">
              <pre>
                <code class="language-scss">
                  .no-gutters {
                    margin-right: 0;
                    margin-left: 0;

                    > .col,
                    > [class*="col-"] {
                      padding-right: 0;
                      padding-left: 0;
                    }
                  }
                </code>
              </pre>
            </div>
            <p>In practice, here’s how it looks. Note you can continue to use this with all other predefined grid classes
              (including column widths, responsive tiers, reorders, and more).</p>
            <div class="bd-example-row">
              <div class="bd-example">
                <div class="row no-gutters">
                  <div class="col-12 col-sm-6 col-md-8">.col-12 .col-sm-6 .col-md-8</div>
                  <div class="col-6 col-md-4">.col-6 .col-md-4</div>
                </div>
              </div>
              <pre>
                <code class="language-html">
                  &lt;div class="row no-gutters"&gt;
                    &lt;div class="col-12 col-sm-6 col-md-8"&gt;.col-12 .col-sm-6 .col-md-8&lt;/div&gt;
                    &lt;div class="col-6 col-md-4"&gt;.col-6 .col-md-4&lt;/div&gt;
                  &lt;/div&gt;
                </code>
              </pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>


  {{--Column breaks--}}
  <section id="column-breaks" class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Column breaks</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Breaking columns to a new line in flexbox requires a small hack: add an element with <code
                class="highlighter-rouge">width: 100%</code> wherever you want to wrap your columns to a new line.
              Normally this is accomplished with multiple <code class="highlighter-rouge">.row</code>s, but not ever
              implementation method can account for this.</p>

            <div class="bd-example-row">
              <div class="bd-example">
                <div class="container">
                  <div class="row">
                    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
                    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>

                    {{-- Force next columns to break to new line --}}
                    <div class="w-100"></div>

                    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
                    <div class="col-6 col-sm-3">.col-6 .col-sm-3</div>
                  </div>
                </div>
              </div>

              <pre>
                <code class="language-html">
                  &lt;div class="row"&gt;
                    &lt;div class="col-6 col-sm-3"&gt;.col-6 .col-sm-3&lt;/div&gt;
                    &lt;div class="col-6 col-sm-3"&gt;.col-6 .col-sm-3&lt;/div&gt;

                    &lt;!-- Force next columns to break to new line --&gt;
                    &lt;div class="w-100"&gt;&lt;/div&gt;

                    &lt;div class="col-6 col-sm-3"&gt;.col-6 .col-sm-3&lt;/div&gt;
                    &lt;div class="col-6 col-sm-3"&gt;.col-6 .col-sm-3&lt;/div&gt;
                  &lt;/div&gt;
                </code>
              </pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--Reordering--}}
  <section id="reordering" class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-body">
          <h3 class="card-title mb-0">Reordering</h3>
        </div>
      </div>
    </div>
  </section>

  {{--Order classes--}}
  <section id="order-classes" class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Order classes</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Use <code class="highlighter-rouge">.order-</code> classes for controlling the <strong>visual
                order</strong> of your content. These classes are responsive, so you can set the <code
                class="highlighter-rouge">order</code> by breakpoint (e.g., <code
                class="highlighter-rouge">.order-1.order-md-2</code>). Includes support for <code
                class="highlighter-rouge">1</code> through <code class="highlighter-rouge">12</code> across all five grid
              tiers.</p>

            <div class="bd-example-row">
              <div class="bd-example">
                <div class="container">
                  <div class="row">
                    <div class="col">
                      First, but unordered
                    </div>
                    <div class="col order-12">
                      Second, but last
                    </div>
                    <div class="col order-1">
                      Third, but first
                    </div>
                  </div>
                </div>
              </div>

              <pre>
                <code class="language-html">
                  &lt;div class="container"&gt;
                    &lt;div class="row"&gt;
                      &lt;div class="col"&gt;
                        First, but unordered
                      &lt;/div&gt;
                      &lt;div class="col order-12"&gt;
                        Second, but last
                      &lt;/div&gt;
                      &lt;div class="col order-1"&gt;
                        Third, but first
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                </code>
              </pre>
            </div>

            <p>There’s also a responsive <code class="highlighter-rouge">.order-first</code> class that quickly changes
              the order of one element by applying <code class="highlighter-rouge">order: -1</code>. This class can also
              be intermixed with the numbered <code class="highlighter-rouge">.order-*</code> classes as needed.</p>
            <div class="bd-example-row">

              <div class="bd-example">
                <div class="container">
                  <div class="row">
                    <div class="col">
                      First, but unordered
                    </div>
                    <div class="col">
                      Second, but unordered
                    </div>
                    <div class="col order-first">
                      Third, but first
                    </div>
                  </div>
                </div>
              </div>

              <pre>
                <code class="language-html">
                  &lt;div class="container"&gt;
                    &lt;div class="row"&gt;
                      &lt;div class="col"&gt;
                        First, but unordered
                      &lt;/div&gt;
                      &lt;div class="col"&gt;
                        Second, but unordered
                      &lt;/div&gt;
                      &lt;div class="col order-first"&gt;
                        Third, but first
                      &lt;/div&gt;
                    &lt;/div&gt;
                  &lt;/div&gt;
                </code>
              </pre>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--Offsetting columns--}}
  <section id="offsetting-columns" class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Offsetting columns</h3>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>You can offset grid columns in two ways: our responsive <code class="highlighter-rouge">.offset-</code>
              grid classes and our <a href="docs/4.0/utilities/spacing/">margin utilities</a>. Grid classes are sized to
              match columns while margins are more useful for quick layouts where the width of the offset is variable.</p>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--Offset classes--}}
  <section id="offset-classes" class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Offset classes</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>Move columns to the right using <code class="highlighter-rouge">.offset-md-*</code> classes. These classes
              increase the left margin of a column by <code class="highlighter-rouge">*</code> columns. For example, <code
                class="highlighter-rouge">.offset-md-4</code> moves <code class="highlighter-rouge">.col-md-4</code> over
              four columns.</p>

            <div class="bd-example-row">
              <div class="bd-example">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">.col-md-4</div>
                    <div class="col-md-4 offset-md-4">.col-md-4 .offset-md-4</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
                    <div class="col-md-3 offset-md-3">.col-md-3 .offset-md-3</div>
                  </div>
                  <div class="row">
                    <div class="col-md-6 offset-md-3">.col-md-6 .offset-md-3</div>
                  </div>
                </div>
              </div>

              <pre>
                <code class="language-html">
                  &lt;div class="row"&gt;
                    &lt;div class="col-md-4"&gt;.col-md-4&lt;/div&gt;
                    &lt;div class="col-md-4 offset-md-4"&gt;.col-md-4 .offset-md-4&lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class="row"&gt;
                    &lt;div class="col-md-3 offset-md-3"&gt;.col-md-3 .offset-md-3&lt;/div&gt;
                    &lt;div class="col-md-3 offset-md-3"&gt;.col-md-3 .offset-md-3&lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class="row"&gt;
                    &lt;div class="col-md-6 offset-md-3"&gt;.col-md-6 .offset-md-3&lt;/div&gt;
                  &lt;/div&gt;
                </code>
              </pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  {{--Margin utilities--}}
  <section id="margin-utilities" class="row">
    <div class="col-md-12">
      <div class="card">
        <div class="card-header">
          <h4 class="card-title">Margin utilities</h4>
        </div>
        <div class="card-content">
          <div class="card-body">
            <p>With the move to flexbox in v4, you can use margin utilities like <code
                class="highlighter-rouge">.mr-auto</code> to force sibling columns away from one another.</p>
            <div class="bd-example-row">
              <div class="bd-example">
                <div class="container">
                  <div class="row">
                    <div class="col-md-4">.col-md-4</div>
                    <div class="col-md-4 ml-auto">.col-md-4 .ml-auto</div>
                  </div>
                  <div class="row">
                    <div class="col-md-3 ml-md-auto">.col-md-3 .ml-md-auto</div>
                    <div class="col-md-3 ml-md-auto">.col-md-3 .ml-md-auto</div>
                  </div>
                  <div class="row">
                    <div class="col-auto mr-auto">.col-auto .mr-auto</div>
                    <div class="col-auto">.col-auto</div>
                  </div>
                </div>
              </div>

              <pre>
                <code class="language-html">
                  &lt;div class="row"&gt;
                    &lt;div class="col-md-4"&gt;.col-md-4&lt;/div&gt;
                    &lt;div class="col-md-4 ml-auto"&gt;.col-md-4 .ml-auto&lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class="row"&gt;
                    &lt;div class="col-md-3 ml-md-auto"&gt;.col-md-3 .ml-md-auto&lt;/div&gt;
                    &lt;div class="col-md-3 ml-md-auto"&gt;.col-md-3 .ml-md-auto&lt;/div&gt;
                  &lt;/div&gt;
                  &lt;div class="row"&gt;
                    &lt;div class="col-auto mr-auto"&gt;.col-auto .mr-auto&lt;/div&gt;
                    &lt;div class="col-auto"&gt;.col-auto&lt;/div&gt;
                  &lt;/div&gt;
                </code>
              </pre>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection