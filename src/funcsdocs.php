<?php
declare(strict_types=1);

namespace DPS;

const PIC_HEIGHT_LOGO = '42px';
const PIC_HEIGHT_LINE = '28px';

const DOC_KIND_COORDINATION = 0;
const DOC_KIND_MEMORANDUM   = 1;
const DOC_KIND_BILL         = 2;
//    const DOC_KIND_REPORT       = 3;
const DOC_KIND_REQTOPAY     = 4;

const DOC_STAGE_NEW     = 0;
const DOC_STAGE_MARKING = 1;
const DOC_STAGE_DONE    = 2;
const DOC_STAGE_ANNUL   = 3;
const DOC_STAGE_TICKING = 4;
//    const DOC_STAGE_TICKING = 4;

const DOC_FILTER_TOMARK = 1;
const DOC_FILTER_TOTICK = 2;

const ACT_MARK_VIRGIN  = 0;
const ACT_MARK_START   = 1;
const ACT_MARK_SHOW    = 2;
const ACT_MARK_VIEW    = 3;
const ACT_MARK_ACCEPT  = 4;
const ACT_MARK_CONFIRM = 5;
const ACT_MARK_CANCEL  = 6;
const ACT_MARK_SIGN    = 7;
const ACT_MARK_REMARK  = 8;

const ACT_TICK_NONE = 0;
const ACT_TICK_EXEC = 1;
const ACT_TICK_COMP = 2;

// побитово
const USER_KIND_VIEW = 0;
const USER_KIND_MARK = 1;
const USER_KIND_TICK = 2;

use Cake\I18n;
//require_once __DIR__.'/../vendor/cakephp/cakephp/src/Core/functions.php';

function arrUserKind()
{
    return [
            USER_KIND_VIEW => __('Viewer'),
            USER_KIND_MARK => __('Marker'),
            USER_KIND_TICK => __('Ticker')
    ];
}

function strUserKind($i)
{
    if (isset($i)) {
        try { $s = $this->arrUserKind()[$i]; }
        catch (Exception $e) { $s = ""; }
    } else {
        $s = "";
    }
    return $s;
}

function arrDocKind()
{
//        return arrayDocKind();
    return [
           DOC_KIND_COORDINATION => __('Coordination'),
           DOC_KIND_MEMORANDUM   => __('Memorandum'),
           DOC_KIND_BILL         => __('Bill'),
//               DOC_KIND_REPORT       => __('Report'),
           DOC_KIND_REQTOPAY     => __('Request To Pay')
    ];
}

function strDocKind($i)
{
    if (isset($i)) {
        try { $s = $this->arrDocKind()[$i]; }
        catch (Exception $e) { $s = ""; }
    } else {
        $s = "";
    }
    return $s;
}

function strDocStage($i)
{
    if (isset($i)){
        switch($i) {
                case DOC_STAGE_NEW     : return __('Stage New');
                case DOC_STAGE_MARKING : return __('Stage Marking');
                case DOC_STAGE_DONE    : return __('Stage Done');
                case DOC_STAGE_ANNUL   : return __('Stage Annul');
                case DOC_STAGE_TICKING : return __('Stage Ticking');
                default: return "";
        }
    }
}

function imgDocStage($i)
{
    if (isset($i)){
        switch($i) {
                case DOC_STAGE_NEW     : return __('circle-white-grey.svg');
                case DOC_STAGE_MARKING : return __('circle-yellow.svg');
                case DOC_STAGE_DONE    : return __('circle-olive.svg');
                case DOC_STAGE_ANNUL   : return __('circle-maroon.svg');
                case DOC_STAGE_TICKING : return __('circle-cyan.svg');
                default: return "";
        }
    }
}

function imgDocFilterToMark($i)
{
    if (isset($i)){
        switch($i & DOC_FILTER_TOMARK) {
                case DOC_FILTER_TOMARK : return __('circle-white-grey-on-3.svg');
                default: return __('circle-white-grey-off-3.svg');
        }
    }
    return __('circle-white-grey-off-3.svg');
}

function imgDocFilterToTick($i)
{
    if (isset($i)){
        switch($i & DOC_FILTER_TOTICK) {
                case DOC_FILTER_TOTICK : return __('circle-cyan-on.svg');
                default: return __('circle-cyan-off.svg');
        }
    }
    return __('circle-cyan-off.svg');
}

function strActMark($i)
{
    if (isset($i)){
        switch($i) {
                case ACT_MARK_VIRGIN  : return __('Virgin');
                case ACT_MARK_START   : return __('Started');
                case ACT_MARK_SHOW    : return __('Seen');
                case ACT_MARK_VIEW    : return __('Viewed');
                case ACT_MARK_ACCEPT  : return __('Accepted');
                case ACT_MARK_CONFIRM : return __('Confirmed');
                case ACT_MARK_CANCEL  : return __('Canceled');
                case ACT_MARK_SIGN    : return __('Signed');
                default: return "";
        }
    }
}

function imgActMark($i)
{
    if (isset($i)){
        switch($i) {
                case ACT_MARK_VIRGIN  : return __('circle-white-grey.svg');
                case ACT_MARK_START   : return __('circle-grey-50.svg');
                case ACT_MARK_SHOW    : return __('circle-yellow.svg');
                case ACT_MARK_VIEW    : return __('circle-teal.svg');
                case ACT_MARK_ACCEPT  : return __('circle-cyan.svg');
                case ACT_MARK_CONFIRM : return __('circle-green.svg');
                case ACT_MARK_CANCEL  : return __('circle-red.svg');
                case ACT_MARK_SIGN    : return __('circle-blue.svg');
                default: return "";
        }
    }
}

function clrActMark($i)
{
    if (isset($i)){
        switch($i) {
                case ACT_MARK_VIRGIN  : return '#ffffff';
                case ACT_MARK_START   : return '#808080';
                case ACT_MARK_SHOW    : return '#ffff00';
                case ACT_MARK_VIEW    : return '#008080';
                case ACT_MARK_ACCEPT  : return '#00ffff';
                case ACT_MARK_CONFIRM : return '#008000';
                case ACT_MARK_CANCEL  : return '#ff0000';
                case ACT_MARK_SIGN    : return '#0000ff';
                case ACT_MARK_REMARK  : return '#c0c0c0';
                default: return "";
        }
    }
}

function strActTick($i)
{
    if (isset($i)){
        switch($i) {
                case ACT_TICK_NONE  : return __('None');
                case ACT_TICK_EXEC  : return __('Exec');
                case ACT_TICK_COMP  : return __('Comp');
                default: return "";
        }
    }
}

function imgActTick($i)
{
    if (isset($i)){
        switch($i) {
                case ACT_TICK_NONE  : return __('circle-white-grey.svg');
                case ACT_TICK_EXEC  : return __('circle-dark-blue.svg');
                case ACT_TICK_COMP  : return __('circle-purple.svg');
                default: return "";
        }
    }
}

function clrActTick($i)
{
    if (isset($i)){
        switch($i) {
                case ACT_TICK_NONE  : return '#ffffff';
                case ACT_TICK_EXEC  : return '#000080';
                case ACT_TICK_COMP  : return '#800080';
                default: return "";
        }
    }
}

function strActNone() {
    return __('None');
}

function imgActNone() {
    return __('circle-white-grey.svg');
}

/*
maroon 800000
green 008000
dark-blue 000080
olive 808000
purple 800080
teal 008080
grey 808080
red ff0000
lime 00ff00
blue 0000ff
yellow ffff00
fuchsia ff00ff
cyan 00ffff
*/



