<div class="container-fluid">
  <div class="row">
    <div class="col-lg-12">
      <div class="card">
        <div class="card-body">
          <h4 class="mt-0 header-title">TempelBae</h4>
          <p class="text-muted mb-4">
            Silahkan tulis atau tempel kode anda disini
          </p>
          <form class="form" method="post" action="<?= BASEURL; ?>paste/add">
            <div class="row">
              <div class="col-md-4">
                <div class="form-group">
                  <label for="tempel_title">Name / Title</label>
                  <input type="text" class="form-control" id="tempel_title" name="tempel_title" required="">
                </div>
              </div>
              <div class="col-md-5">
                <div class="form-group">
                  <label for="tempel_style">Type Code</label>
                  <select class="select2 form-control mb-3 custom-select" id="tempel_style" name="tempel_type" style="width: 100%; height:36px;">
                    <option value="." selected="" data-language="text">None</option>
                    <optgroup label="- POPULAR LANGUAGES -">
                      <option value=".sh" data-language="bash">Bash</option>
                      <option value=".c" data-language="c">C</option>
                      <option value=".cs" data-language="csharp">C#</option>
                      <option value=".cpp" data-language="cpp">C++</option>
                      <option value=".css" data-language="css">CSS</option>
                      <option value=".html" data-language="html4strict">HTML</option>
                      <option value=".json" data-language="json">JSON</option>
                      <option value=".java" data-language="java">Java</option>
                      <option value=".js" data-language="javascript">JavaScript</option>
                      <option value="." data-language="lua">Lua</option>
                      <option value="." disabled="" data-language="markdown">Markdown (PRO members only)</option>
                      <option value=".m" data-language="objc">Objective C</option>
                      <option value=".php" data-language="php">PHP</option>
                      <option value=".pod" data-language="perl">Perl</option>
                      <option value=".py" data-language="python">Python</option>
                      <option value=".rb" data-language="ruby">Ruby</option>
                      <option value="." data-language="swift">Swift</option>
                    </optgroup>
                    <optgroup label="- ALL LANGUAGES -">
                      <option value="." data-language="4cs">4CS</option>
                      <option value="." data-language="6502acme">6502 ACME Cross Assembler</option>
                      <option value="." data-language="6502kickass">6502 Kick Assembler</option>
                      <option value="." data-language="6502tasm">6502 TASM/64TASS</option>
                      <option value="." data-language="abap">ABAP</option>
                      <option value="." data-language="aimms">AIMMS</option>
                      <option value="." data-language="algol68">ALGOL 68</option>
                      <option value="." data-language="apt_sources">APT Sources</option>
                      <option value="." data-language="arm">ARM</option>
                      <option value="." data-language="asm">ASM (NASM)</option>
                      <option value="." data-language="asp">ASP</option>
                      <option value="." data-language="actionscript">ActionScript</option>
                      <option value="." data-language="actionscript3">ActionScript 3</option>
                      <option value="." data-language="ada">Ada</option>
                      <option value="." data-language="apache">Apache Log</option>
                      <option value="." data-language="applescript">AppleScript</option>
                      <option value="." data-language="arduino">Arduino</option>
                      <option value="." data-language="asymptote">Asymptote</option>
                      <option value="." data-language="autoit">AutoIt</option>
                      <option value="." data-language="autohotkey">Autohotkey</option>
                      <option value="." data-language="avisynth">Avisynth</option>
                      <option value="." data-language="awk">Awk</option>
                      <option value="." data-language="bascomavr">BASCOM AVR</option>
                      <option value="." data-language="bnf">BNF</option>
                      <option value="." data-language="boo">BOO</option>
                      <option value="." data-language="bash">Bash</option>
                      <option value="." data-language="basic4gl">Basic4GL</option>
                      <option value="." data-language="dos">Batch</option>
                      <option value="." data-language="bibtex">BibTeX</option>
                      <option value="." data-language="blitzbasic">Blitz Basic</option>
                      <option value="." data-language="b3d">Blitz3D</option>
                      <option value="." data-language="bmx">BlitzMax</option>
                      <option value="." data-language="bf">BrainFuck</option>
                      <option value="." data-language="c">C</option>
                      <option value="." data-language="c_winapi">C (WinAPI)</option>
                      <option value="." data-language="cil">C Intermediate Language</option>
                      <option value="." data-language="c_mac">C for Macs</option>
                      <option value="." data-language="csharp">C#</option>
                      <option value="." data-language="cpp">C++</option>
                      <option value="." data-language="cpp-winapi">C++ (WinAPI)</option>
                      <option value="." data-language="cpp-qt">C++ (with Qt extensions)</option>
                      <option value="." data-language="c_loadrunner">C: Loadrunner</option>
                      <option value="." data-language="caddcl">CAD DCL</option>
                      <option value="." data-language="cadlisp">CAD Lisp</option>
                      <option value="." data-language="cfdg">CFDG</option>
                      <option value="." data-language="cmake">CMake</option>
                      <option value="." data-language="cobol">COBOL</option>
                      <option value="." data-language="css">CSS</option>
                      <option value="." data-language="ceylon">Ceylon</option>
                      <option value="." data-language="chaiscript">ChaiScript</option>
                      <option value="." data-language="chapel">Chapel</option>
                      <option value="." data-language="clojure">Clojure</option>
                      <option value="." data-language="klonec">Clone C</option>
                      <option value="." data-language="klonecpp">Clone C++</option>
                      <option value="." data-language="coffeescript">CoffeeScript</option>
                      <option value="." data-language="cfm">ColdFusion</option>
                      <option value="." data-language="cuesheet">Cuesheet</option>
                      <option value="." data-language="d">D</option>
                      <option value="." data-language="dcl">DCL</option>
                      <option value="." data-language="dcpu16">DCPU-16</option>
                      <option value="." data-language="dcs">DCS</option>
                      <option value="." data-language="div">DIV</option>
                      <option value="." data-language="dot">DOT</option>
                      <option value="." data-language="dart">Dart</option>
                      <option value="." data-language="delphi">Delphi</option>
                      <option value="." data-language="oxygene">Delphi Prism (Oxygene)</option>
                      <option value="." data-language="diff">Diff</option>
                      <option value="." data-language="e">E</option>
                      <option value="." data-language="ecmascript">ECMAScript</option>
                      <option value="." data-language="epc">EPC</option>
                      <option value="." data-language="ezt">Easytrieve</option>
                      <option value="." data-language="eiffel">Eiffel</option>
                      <option value="." data-language="email">Email</option>
                      <option value="." data-language="erlang">Erlang</option>
                      <option value="." data-language="euphoria">Euphoria</option>
                      <option value="." data-language="fsharp">F#</option>
                      <option value="." data-language="fo">FO Language</option>
                      <option value="." data-language="falcon">Falcon</option>
                      <option value="." data-language="filemaker">Filemaker</option>
                      <option value="." data-language="f1">Formula One</option>
                      <option value="." data-language="fortran">Fortran</option>
                      <option value="." data-language="freebasic">FreeBasic</option>
                      <option value="." data-language="freeswitch">FreeSWITCH</option>
                      <option value="." data-language="gambas">GAMBAS</option>
                      <option value="." data-language="gdb">GDB</option>
                      <option value="." data-language="gdscript">GDScript</option>
                      <option value="." data-language="gml">Game Maker</option>
                      <option value="." data-language="genero">Genero</option>
                      <option value="." data-language="genie">Genie</option>
                      <option value="." data-language="gettext">GetText</option>
                      <option value="." data-language="go">Go</option>
                      <option value="." data-language="godot-glsl">Godot GLSL</option>
                      <option value="." data-language="groovy">Groovy</option>
                      <option value="." data-language="gwbasic">GwBasic</option>
                      <option value="." data-language="hq9plus">HQ9 Plus</option>
                      <option value="." data-language="html4strict">HTML</option>
                      <option value="." data-language="html5">HTML 5</option>
                      <option value="." data-language="haskell">Haskell</option>
                      <option value="." data-language="haxe">Haxe</option>
                      <option value="." data-language="hicest">HicEst</option>
                      <option value="." data-language="idl">IDL</option>
                      <option value="." data-language="ini">INI file</option>
                      <option value="." data-language="intercal">INTERCAL</option>
                      <option value="." data-language="io">IO</option>
                      <option value="." data-language="ispfpanel">ISPF Panel Definition</option>
                      <option value="." data-language="icon">Icon</option>
                      <option value="." data-language="inno">Inno Script</option>
                      <option value="." data-language="j">J</option>
                      <option value="." data-language="jcl">JCL</option>
                      <option value=".json" data-language="json">JSON</option>
                      <option value=".java" data-language="java">Java</option>
                      <option value=".java" data-language="java5">Java 5</option>
                      <option value="." data-language="javascript">JavaScript</option>
                      <option value="." data-language="julia">Julia</option>
                      <option value="." data-language="ksp">KSP (Kontakt Script)</option>
                      <option value="." data-language="kixtart">KiXtart</option>
                      <option value=".KT" data-language="kotlin">Kotlin</option>
                      <option value="." data-language="ldif">LDIF</option>
                      <option value="." data-language="llvm">LLVM</option>
                      <option value="." data-language="lolcode">LOL Code</option>
                      <option value="." data-language="lscript">LScript</option>
                      <option value="." data-language="latex">Latex</option>
                      <option value="." data-language="lb">Liberty BASIC</option>
                      <option value="." data-language="lsl2">Linden Scripting</option>
                      <option value="." data-language="lisp">Lisp</option>
                      <option value="." data-language="locobasic">Loco Basic</option>
                      <option value="." data-language="logtalk">Logtalk</option>
                      <option value="." data-language="lotusformulas">Lotus Formulas</option>
                      <option value="." data-language="lotusscript">Lotus Script</option>
                      <option value="." data-language="lua">Lua</option>
                      <option value="." data-language="m68k">M68000 Assembler</option>
                      <option value="." data-language="mmix">MIX Assembler</option>
                      <option value="." data-language="mk-61">MK-61/52</option>
                      <option value="." data-language="mpasm">MPASM</option>
                      <option value="." data-language="mxml">MXML</option>
                      <option value="." data-language="magiksf">MagikSF</option>
                      <option value="." data-language="make">Make</option>
                      <option value="." data-language="mapbasic">MapBasic</option>
                      <option value="." disabled="" data-language="markdown">Markdown (PRO members only)</option>
                      <option value="." data-language="matlab">MatLab</option>
                      <option value="." data-language="mercury">Mercury</option>
                      <option value="." data-language="metapost">MetaPost</option>
                      <option value="." data-language="modula2">Modula 2</option>
                      <option value="." data-language="modula3">Modula 3</option>
                      <option value="." data-language="68000devpac">Motorola 68000 HiSoft Dev</option>
                      <option value=".sql" data-language="mysql">MySQL</option>
                      <option value="." data-language="nagios">Nagios</option>
                      <option value="." data-language="netrexx">NetRexx</option>
                      <option value="." data-language="nginx">Nginx</option>
                      <option value="." data-language="nim">Nim</option>
                      <option value="." data-language="nsis">NullSoft Installer</option>
                      <option value="." data-language="ocaml">OCaml</option>
                      <option value="." data-language="ocaml-brief">OCaml Brief</option>
                      <option value="." data-language="oberon2">Oberon 2</option>
                      <option value="." data-language="objeck">Objeck Programming Langua</option>
                      <option value="." data-language="objc">Objective C</option>
                      <option value="." data-language="octave">Octave</option>
                      <option value="." data-language="oorexx">Open Object Rexx</option>
                      <option value="." data-language="pf">OpenBSD PACKET FILTER</option>
                      <option value="." data-language="glsl">OpenGL Shading</option>
                      <option value="." data-language="oobas">Openoffice BASIC</option>
                      <option value="." data-language="oracle11">Oracle 11</option>
                      <option value="." data-language="oracle8">Oracle 8</option>
                      <option value="." data-language="oz">Oz</option>
                      <option value="." data-language="parigp">PARI/GP</option>
                      <option value="." data-language="pcre">PCRE</option>
                      <option value=".php" data-language="php">PHP</option>
                      <option value=".php" data-language="php-brief">PHP Brief</option>
                      <option value="." data-language="pli">PL/I</option>
                      <option value="." data-language="plsql">PL/SQL</option>
                      <option value="." data-language="povray">POV-Ray</option>
                      <option value="." data-language="parasail">ParaSail</option>
                      <option value="." data-language="pascal">Pascal</option>
                      <option value="." data-language="pawn">Pawn</option>
                      <option value="." data-language="per">Per</option>
                      <option value="." data-language="perl">Perl</option>
                      <option value="." data-language="perl6">Perl 6</option>
                      <option value="." data-language="phix">Phix</option>
                      <option value="." data-language="pic16">Pic 16</option>
                      <option value="." data-language="pike">Pike</option>
                      <option value="." data-language="pixelbender">Pixel Bender</option>
                      <option value="." data-language="postscript">PostScript</option>
                      <option value="." data-language="postgresql">PostgreSQL</option>
                      <option value="." data-language="powerbuilder">PowerBuilder</option>
                      <option value="." data-language="powershell">PowerShell</option>
                      <option value="." data-language="proftpd">ProFTPd</option>
                      <option value="." data-language="progress">Progress</option>
                      <option value="." data-language="prolog">Prolog</option>
                      <option value="." data-language="properties">Properties</option>
                      <option value="." data-language="providex">ProvideX</option>
                      <option value="." data-language="puppet">Puppet</option>
                      <option value="." data-language="purebasic">PureBasic</option>
                      <option value="." data-language="pycon">PyCon</option>
                      <option value=".py" data-language="python">Python</option>
                      <option value="." data-language="pys60">Python for S60</option>
                      <option value="." data-language="qbasic">QBasic</option>
                      <option value="." data-language="qml">QML</option>
                      <option value="." data-language="rsplus">R</option>
                      <option value="." data-language="rbs">RBScript</option>
                      <option value="." data-language="rebol">REBOL</option>
                      <option value="." data-language="reg">REG</option>
                      <option value="." data-language="rpmspec">RPM Spec</option>
                      <option value="." data-language="racket">Racket</option>
                      <option value="." data-language="rails">Rails</option>
                      <option value="." data-language="rexx">Rexx</option>
                      <option value="." data-language="robots">Robots</option>
                      <option value="." data-language="roff">Roff Manpage</option>
                      <option value="." data-language="ruby">Ruby</option>
                      <option value="." data-language="gnuplot">Ruby Gnuplot</option>
                      <option value="." data-language="rust">Rust</option>
                      <option value="." data-language="sas">SAS</option>
                      <option value="." data-language="scl">SCL</option>
                      <option value="." data-language="spark">SPARK</option>
                      <option value="." data-language="sparql">SPARQL</option>
                      <option value="." data-language="sqf">SQF</option>
                      <option value=".sql" data-language="sql">SQL</option>
                      <option value="." data-language="sshconfig">SSH Config</option>
                      <option value="." data-language="scala">Scala</option>
                      <option value="." data-language="scheme">Scheme</option>
                      <option value="." data-language="scilab">Scilab</option>
                      <option value="." data-language="sdlbasic">SdlBasic</option>
                      <option value="." data-language="smalltalk">Smalltalk</option>
                      <option value="." data-language="smarty">Smarty</option>
                      <option value="." data-language="standardml">StandardML</option>
                      <option value="." data-language="stonescript">StoneScript</option>
                      <option value="." data-language="sclang">SuperCollider</option>
                      <option value="." data-language="swift">Swift</option>
                      <option value="." data-language="systemverilog">SystemVerilog</option>
                      <option value="." data-language="tsql">T-SQL</option>
                      <option value="." data-language="tcl">TCL</option>
                      <option value="." data-language="texgraph">TeXgraph</option>
                      <option value="." data-language="teraterm">Tera Term</option>
                      <option value="." data-language="typescript">TypeScript</option>
                      <option value="." data-language="typoscript">TypoScript</option>
                      <option value="." data-language="upc">UPC</option>
                      <option value="." data-language="unicon">Unicon</option>
                      <option value="." data-language="uscript">UnrealScript</option>
                      <option value="." data-language="urbi">Urbi</option>
                      <option value="." data-language="vbnet">VB.NET</option>
                      <option value="." data-language="vbscript">VBScript</option>
                      <option value="." data-language="vhdl">VHDL</option>
                      <option value="." data-language="vim">VIM</option>
                      <option value="." data-language="vala">Vala</option>
                      <option value="." data-language="vedit">Vedit</option>
                      <option value="." data-language="verilog">VeriLog</option>
                      <option value="." data-language="visualprolog">Visual Pro Log</option>
                      <option value="." data-language="vb">VisualBasic</option>
                      <option value="." data-language="visualfoxpro">VisualFoxPro</option>
                      <option value="." data-language="whois">WHOIS</option>
                      <option value="." data-language="whitespace">WhiteSpace</option>
                      <option value="." data-language="winbatch">Winbatch</option>
                      <option value="." data-language="xbasic">XBasic</option>
                      <option value=".xml" data-language="xml">XML</option>
                      <option value="." data-language="xpp">XPP</option>
                      <option value="." data-language="xojo">Xojo</option>
                      <option value="." data-language="xorg_conf">Xorg Config</option>
                      <option value="." data-language="yaml">YAML</option>
                      <option value="." data-language="yara">YARA</option>
                      <option value="." data-language="z80">Z80 Assembler</option>
                      <option value="." data-language="zxbasic">ZXBasic</option>
                      <option value="." data-language="autoconf">autoconf</option>
                      <option value=".js" data-language="jquery">jQuery</option>
                      <option value="." data-language="mirc">mIRC</option>
                      <option value="." data-language="newlisp">newLISP</option>
                      <option value="." data-language="q">q/kdb+</option>
                      <option value="." data-language="thinbasic">thinBasic</option>
                    </optgroup>
                  </select>
                </div>
              </div>
              <div class="col-md-3">
                <div class="form-group">
                  <label for="expired_at">Expired Code</label>
                  <select class="select2 form-control mb-3 custom-select" id="expired_at" name="expired_at">
                    <option value="1" selected="">Default - 1 Day</option>
                    <optgroup label="- EXPIRED AT -">
                      <option value="1">1 Day</option>
                      <option value="2">2 Day</option>
                      <option value="3">3 Day</option>
                      <option value="7">1 Week</option>
                      <option value="14">2 Week</option>
                      <option value="30">1 Mount</option>
                      <option value="60">2 Mount</option>
                      <option value="360">1 Year</option>
                      <option value="" disabled="">Never (PRO members only)</option>
                    </optgroup>
                  </select>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <div class="form-group">
                  <label for="message">Paste Code</label>
                  <textarea class="form-control language-markup" rows="5" id="tempel_text" name="tempel_text"><?= isset($data['tempel_text']) ? $data['tempel_text'] : '' ?></textarea>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-sm-12 text-right">
                <button type="submit" class="btn btn-primary px-5 py-2" name="submit">Send Now</button>
              </div>
            </div>
          </form>
        </div>
        <!--end card-body-->
      </div>
      <!--end card-->
    </div>
    <!-- end col -->

  </div>
  <!-- end row -->
</div>
<!-- container -->