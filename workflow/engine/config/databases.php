<?php
/**
 * databases.php
 *
 * ProcessMaker Open Source Edition
 * Copyright (C) 2004 - 2008 Colosa Inc.23
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with this program.  If not, see <http://www.gnu.org/licenses/>.
 *
 * For more information, contact Colosa Inc, 2566 Le Jeune Rd.,
 * Coral Gables, FL, 33134, USA, or email info@colosa.com.
 *
 */

if (defined('PATH_DB') && defined('SYS_SYS')) {

    if (!file_exists(PATH_DB . SYS_SYS . '/db.php')) {
        throw new Exception("Could not find db.php in current workspace " . SYS_SYS);
    }

    require_once(PATH_DB . SYS_SYS . '/db.php');
    
    $host = explode(':', DB_HOST);
    $pro ['datasources']['workflow']['datasources']               = DB_NAME;
    $pro ['datasources']['workflow']['adapter']                   = DB_ADAPTER;
    $pro ['datasources']['workflow']['connection']['dsn']         = (count($host) == 1) ? DB_ADAPTER.':host='.DB_HOST.';dbname='.DB_NAME : DB_ADAPTER.':host=' . $host[0] . '; port=' . $host[1] . '; dbname=' . DB_NAME;
    //'mysql:host=localhost;port=3306;dbname=wf_marco';//DB_ADAPTER.':host='.DB_HOST.';dbname='.DB_NAME;//
    $pro ['datasources']['workflow']['connection']['user']        = DB_USER;
    $pro ['datasources']['workflow']['connection']['password']    = DB_PASS;

    $host = explode(':', DB_RBAC_HOST);
    $pro ['datasources']['rbac']['datasources']               = DB_RBAC_NAME;
    $pro ['datasources']['rbac']['adapter']                   = DB_ADAPTER;
    $pro ['datasources']['rbac']['connection']['dsn']         = (count($host) == 1) ? DB_ADAPTER.':host='.DB_HOST.';dbname='.DB_RBAC_NAME : DB_ADAPTER.':host=' . $host[0] . '; port=' . $host[1] . '; dbname=' . DB_RBAC_NAME;
    $pro ['datasources']['rbac']['connection']['user']        = DB_RBAC_USER;
    $pro ['datasources']['rbac']['connection']['password']    = DB_RBAC_PASS;

    $host = explode(':', DB_REPORT_HOST);
    $pro ['datasources']['rp']['datasources']               = DB_REPORT_NAME;
    $pro ['datasources']['rp']['adapter']                   = DB_ADAPTER;
    $pro ['datasources']['rp']['connection']['dsn']         = (count($host) == 1) ? DB_ADAPTER.':host='.DB_HOST.';dbname='.DB_REPORT_NAME : DB_ADAPTER.':host=' . $host[0] . '; port=' . $host[1] . '; dbname=' . DB_REPORT_NAME;
    $pro ['datasources']['rp']['connection']['user']        = DB_REPORT_USER;
    $pro ['datasources']['rp']['connection']['password']    = DB_REPORT_PASS;

    ////to do: enable for other databases
    //$dbType = DB_ADAPTER;
    //
    //$dsn     = DB_ADAPTER . '://' .  DB_USER . ':' . DB_PASS . '@' . DB_HOST . '/' . DB_NAME;
    //
    ////to do: enable a mechanism to select RBAC Database
    //$dsnRbac = DB_ADAPTER . '://' .  DB_RBAC_USER . ':' . DB_RBAC_PASS . '@' . DB_RBAC_HOST . '/' . DB_RBAC_NAME;
    //
    ////to do: enable a mechanism to select report Database
    //$dsnReport = DB_ADAPTER . '://' .  DB_REPORT_USER . ':' . DB_REPORT_PASS . '@' . DB_REPORT_HOST . '/' . DB_REPORT_NAME;
    //
    //switch (DB_ADAPTER) {
    //  case 'mysql':
    //    $dsn       .= '?encoding=utf8';
    //    $dsnRbac   .= '?encoding=utf8';
    //    $dsnReport .= '?encoding=utf8';
    //  break;
    //  case 'mssql':
    //    //$dsn       .= '?sendStringAsUnicode=false';
    //    //$dsnRbac   .= '?sendStringAsUnicode=false';
    //    //$dsnReport .= '?sendStringAsUnicode=false';
    //  break;
    //  default:
    //  break;
    //}
  
    //$pro ['datasources']['workflow']['connection'] = $dsn;
    //$pro ['datasources']['workflow']['adapter'] = DB_ADAPTER;
  
    //$pro ['datasources']['rbac']['connection'] = $dsnRbac;
    //$pro ['datasources']['rbac']['adapter'] = DB_ADAPTER;
  
    //$pro ['datasources']['rp']['connection'] = $dsnReport;
    //$pro ['datasources']['rp']['adapter'] = DB_ADAPTER;

}

    $pro ['datasources']['dbarray']['datasources']               = 'pm_os';
    $pro ['datasources']['dbarray']['adapter']                   = 'dbarray';
    $pro ['datasources']['dbarray']['connection']['dsn']         = 'dbarray:host=localhost;dbname=pm_os';
    $pro ['datasources']['dbarray']['connection']['user']        = 'user';
    $pro ['datasources']['dbarray']['connection']['password']    = 'pass';

  //$pro ['datasources']['dbarray']['connection'] = 'dbarray://user:pass@localhost/pm_os';
  //$pro ['datasources']['dbarray']['adapter']    = 'dbarray';
//print_r($pro);
  return $pro;
