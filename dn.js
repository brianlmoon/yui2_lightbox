/**
 * dealnews javascript library
 *
 * The DN object is the main object that namespaces the library
 *
 * @author      Brian Moon <brianm@dealnews.com>
 *
 * Copyright (c) 2011, dealnews.com, Inc.
 * All rights reserved.
 *
 * Redistribution and use in source and binary forms, with or
 * without modification, are permitted provided that the following
 * conditions are met:
 *
 *  * Redistributions of source code must retain the above copyright
 *    notice, this list of conditions and the following disclaimer.
 *  * Redistributions in binary form must reproduce the above
 *    copyright notice, this list of conditions and the following
 *    disclaimer in the documentation and/or other materials
 *    provided with the distribution.
 *  * Neither the name of dealnews.com nor the names of its
 *    contributors may be used to endorse or promote products
 *    derived from this software without specific prior written
 *    permission.
 *
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND
 * CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES,
 * INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
 * MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
 * DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS
 * BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
 * EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
 * TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
 * DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
 * ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
 * OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY
 * OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 * POSSIBILITY OF SUCH DAMAGE.
 *
 *
 */

if (typeof DN == "undefined" || !DN) {

    var DN = {};

    /**
     * Native selectors are much faster than YUI's Selector utility
     * DN.selector is compatible with YAHOO.util.Selector.query and
     * is intended as a drop in replacement for it
     */
    DN.selector = function(sel, elem, returnFirst){

        var retval = null;

        if(!elem){
            elem = document;
        }

        if(elem.querySelector){

            if(returnFirst){
                retval = elem.querySelector(sel);
            } else {
                retval = elem.querySelectorAll(sel);
            }

        } else {
            retval = YAHOO.util.Selector.query(sel, elem, returnFirst);
        }

        return retval;

    }

}
