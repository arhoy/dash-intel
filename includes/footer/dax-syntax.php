<script type = "text/javascript">


/**
 * SyntaxHighlighter
 * http://alexgorbatchev.com/
 *
 * SyntaxHighlighter is donationware. If you are using it, please donate.
 * http://alexgorbatchev.com/wiki/SyntaxHighlighter:Donate
 *
 * @version
 * 2.1.364 (October 15 2009)
 * 
 * @copyright
 * Copyright (C) 2004-2009 Alex Gorbatchev.
 *
 * @license
 * This file is part of SyntaxHighlighter.
 * 
 * SyntaxHighlighter is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 * 
 * SyntaxHighlighter is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 * 
 * You should have received a copy of the GNU General Public License
 * along with SyntaxHighlighter.  If not, see <http://www.gnu.org/copyleft/lesser.html>.
 */

/* 
 * @version
 * 3.0 (April 10, 2014)
 *
 * @author
 * SQLBI 
*/

SyntaxHighlighter.brushes.DAX = function()
{
	var funcs	= 'abs acos acosh acot acoth addcolumns addmissingitems all allexcept allnoblankrow allselected ' +
	              'and asin asinh atan atanh average averagea averagex beta.dist beta.inv blank calculate calculatetable ' +
				  'calendar calendarauto ceiling chisq.dist chisq.dist.rt chisq.inv chisq.inv.rt closingbalancemonth ' +
				  'closingbalancequarter closingbalanceyear combin combina concatenate concatenatex confidence.norm confidence.t ' + 
				  'contains containsrow cos cosh cot coth count counta countax countblank countrows countx crossfilter crossjoin currency ' +
				  'currentgroup customdata datatable date dateadd datediff datesbetween datesinperiod datesmtd datesqtd datesytd ' +
				  'datevalue day degrees detailrows distinct distinctcount divide earlier earliest edate endofmonth endofquarter endofyear ' +
				  'eomonth even exact except exp expon.dist fact false filter filters find firstdate firstnonblank fixed floor ' +
				  'format gcd generate generateall geomean geomeanx groupby hasonefilter hasonevalue hour keywordmatch if iferror ignore int ' +
				  'intersect isblank iscrossfiltered isempty iserror iseven isfiltered islogical isnontext isnumber iso.ceiling ' +
				  'isodd isonorafter issubtotal istext keepfilters lastdate lastnonblank lcm left len ln log log10 lookupvalue ' +
				  'lower max maxa maxx median medianx mid min mina minute minx mod month mround naturalinnerjoin naturalleftouterjoin ' +
				  'nextday nextmonth nextquarter nextyear not now odd openingbalancemonth openingbalancequarter openingbalanceyear or ' +
				  'parallelperiod path pathcontains pathitem pathitemreverse pathlength percentile.exc percentile.inc percentilex.exc ' +
				  'percentilex.inc permut pi poisson.dist power previousday previousmonth previousquarter previousyear product productx ' +
				  'quotient radians rand randbetween rank.eq rankx related relatedtable replace rept right rollup rollupaddissubtotal ' + 
				  'rollupgroup rollupissubtotal round rounddown roundup row sameperiodlastyear sample search second selectcolumns sign ' +
				  'sin sinh sqrt sqrtpi startofmonth startofquarter startofyear stdev.p stdev.s stdevx.p stdevx.s substitute ' +
				  'substitutewithindex sum summarize summarizecolumns sumx switch tan tanh time timevalue today topn totalmtd ' +
				  'totalqtd totalytd treatas trim true trunc unicode union upper userelationship username userprincipalname value ' +
				  'values var.p var.s varx.p varx.s weekday weeknum xirr xnpv year yearfrac';

	var keywords =	'at asc both by create day define desc evaluate false measure month ' +
					'none order return single start table true var year';

	var operators =	'not';

	this.regexList = [
		{ regex: /--(.*)$/gm,												css: 'comments' },			// one line and multiline comments
		{ regex: SyntaxHighlighter.regexLib.multiLineDoubleQuotedString,	css: 'string' },			// double quoted strings
		{ regex: SyntaxHighlighter.regexLib.multiLineSingleQuotedString,	css: 'string' },			// single quoted strings
		{ regex: new RegExp(this.getKeywords(funcs), 'gmi'),				css: 'color2' },			// functions
		{ regex: new RegExp(this.getKeywords(operators), 'gmi'),			css: 'color1' },			// operators and such
		{ regex: new RegExp(this.getKeywords(keywords), 'gmi'),				css: 'keyword' },			// keyword
		{ regex: /\(|\)/gm,													css: 'parenthesis' }// parenthesis
		];
};

SyntaxHighlighter.brushes.DAX.prototype	= new SyntaxHighlighter.Highlighter();
SyntaxHighlighter.brushes.DAX.aliases	= ['dax'];
    
</script>
