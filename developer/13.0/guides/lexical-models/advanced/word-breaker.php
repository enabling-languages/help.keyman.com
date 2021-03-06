<?php
  require_once('includes/template.php');

  head([
    'title' => "Word breaker"
  ]);
?>

<h1 class="title"> Word breaker </h1>

<aside>
  <p>
    <strong>Note</strong>: If your language uses spaces to denote word breaks,
    the default word breaker is probably sufficient. Only customize this if you
    know the default word breaker really does not work for your language!
  </p>
</aside>

<p> The <code>trie</code> family of lexical models needs to know what a word
is in running text. In languages using the Latin script—like, English, French,
and SENĆOŦEN—finding words is easy. Words are separated by spaces or
punctuation. The actual rules for where to find words can get quite tricky to
describe, but Keyman implements the <a href="https://unicode.org/reports/tr29/#Word_Boundaries">
Unicode Standard Annex #29 §4.1 Default Word Boundary Specification </a>
which works well for most languages.
</p>

<p> However, in languages written in other scripts—especially East Asian
scripts like Chinese, Japanese, Khmer, Lao, and Thai—there are is no obvious
break in between words. For these languages, there must be special rules for
determining when words start and stop. This is what a <dfn>word breaker
function</dfn> is responsible for. It is a little bit of code that looks at some
text to determine where the words are. </p>

<p> The word breaker function can be specified in the
  <a href="./model-definition-file.php">model definition file</a> as follows:
</p>

<pre><code class="lang-typescript">const source: LexicalModelSource = {
  format: 'trie-1.0',
  sources: ['wordlist.tsv'],
  // CUSTOMIZE THIS:
  wordBreaker: function(text: string): Span[] {
    // Return zero or more **spans** of text:
    return [];
  },
  // other customizations go here:
};

export default source;</code></pre>

<p> The function must return zero or more <code>Span</code> objects.
The spans, representing an indivisible span of text, must be in ascending
order of their start point, and they must be non-overlapping.
</p>


<h3> A <code>Span</code> object </h3>

<p> A <dfn>span</dfn> is an indivisible piece of a sentence. This is typically
a word, but it can also be a series of spaces, an emoji, or a series of
punctuation characters. <strong>A span that looks like a word is treated like a word
in the <code>trie-1.0</code> model</strong>. </p>

<p> A <code>span</code> has the following properties: </p>

<pre><code class="lang-typescript">{
  start: number;
  end: number;
  length: number;
  text: string;
}
</code></pre>

<p> The <code>start</code> and <code>end</code> properties are indices into
the original string at which the span begins, and the index at which the
<em>next</em> span begins. </p>

<p> <code>length</code> is <code>end - start</code>. </p>

<p> <code>text</code> is the actual text of the string contained within the
span. </p>


<h2> Example for English </h2>

<p> Here is a full example of word breaker function that returns an array of
spans in an ASCII (English) string. Note: this is just an example—please use
the default word breaker for English text! </p>

<pre><code class="lang-typescript">const source: LexicalModelSource = {
  format: 'trie-1.0',
  sources: ['wordlist.tsv'],
  // EXAMPLE BEGINS HERE:
  wordBreaker: function(text: string): Span[] {
    // A span derived from a JavaScript RegExp match array:
    class RegExpDerivedSpan implements Span {
      readonly text: string;
      readonly start: number;

      constructor(text: string, start: number) {
        this.text = text;
        this.start = start;
      }

      get length(): number {
        return this.text.length;
      }

      get end(): number {
        return this.start + this.text.length;
      }
    }

    let matchWord = /[A-Za-z0-9']+/g;
    let words: Span[] = [];
    let match: RegExpExecArray;
    while ((match = matchWord.exec(phrase)) !== null) {
      words.push(new RegExpDerivedSpan(match[0], match.index));
    }

    return words;
  },
  // other customizations go here:
};

export default source;</code></pre>


<h2> See also </h2>

<p>
  <a href="https://github.com/keymanapp/keyman/blob/4211b468949860b8fb4a4707710472ab9e33c581/common/lexical-model-types/index.d.ts#L286-L323">
The TypeScript definition of <code>WordBreakingFunction</code> and <code>Span</code></a>
</p>

<hr>

<p> <a href="./">Return to “Advanced Lexical Model Topics”</a> </p>
