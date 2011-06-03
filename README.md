# Force MyISAM Tables
Copyright 2011 Georg Grossberger (georg@grossberger.at)

## About
This is a TYPO3 extension, that forces TYPO3 and extensions, to use the MyISAM table engine for new tables. Useful when working with MariaDB which has an improved MyISAM engine compared to the one in MySQL.

IMPORANT: Do NOT use it, when using MySQL, it won't break anything, but can seriously hit your performance. IT IS SUPPOSED TO RUN WITH MARIADB

See: http://mariadb.org/

## Install
Clone the repository into your typo3conf/ext/ folder, or simply load it from the TER with the Extension Manager. Extension key is "ggforcemyisam". Once it's there, simply install it (via the Extension Manager) and you're done. The rest is done automatically.

Once it is installed, you should go to the install tool, make a COMPARE operation and update the tables listed. Otherwise, already existing InnoDB tables remain like that. When installing a new extension that uses InnoDB tables, (e.g. realurl) the conversion of the engine name is done automatically.

## License
This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

