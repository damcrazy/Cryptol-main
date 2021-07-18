<?php 
session_start(); 
include "../Users/db_conn.php";
@$dbname = 'users';
@$username=$_SESSION['user_name'];
$query = "select * from $dbname where user_name='$username'";
$cur_ha=mysqli_query($conn,$query);
$row = mysqli_fetch_assoc($cur_ha);
$_SESSION = $row;

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="./table.css">
    <link rel="stylesheet" href="../css/bootstrap-4.4.1.css">
    <style>
         ::-webkit-scrollbar-track {
            -webkit-box-shadow: inset 0 0 0px rgba(0, 0, 0, 0.3);
            background-color: #F5F5F5;
        }
        
         ::-webkit-scrollbar {
            width: 0px;
            background-color: #F5F5F5;
        }
        
         ::-webkit-scrollbar-thumb {
            background-color: #000000;
        }
    </style>

</head>

<body style="height: 100%;width: 100%;">
    <table class="table transact-table-box">
        <thead>
            <tr class="table__thead__tr head">
                <th class="table__thead__th">
                    <div class="table__thead__th__wrapper">&nbsp;</div>
                </th>
                <th class="table__thead__th sortable">
                    <div class="table__thead__th__wrapper">Assets</div>
                </th>
                <th class="table__thead__th text-right sortable">
                    <div class="table__thead__th__wrapper">Available Balance</div>
                </th>
                <th class="table__thead__th text-right sortable">
                    <div class="table__thead__th__wrapper">Locked</div>
                </th>
                <th class="table__thead__th text-right sortable">
                    <div class="table__thead__th__wrapper">Total</div>
                </th>
                <th class="table__thead__th text-right sortable">
                    <div class="table__thead__th__wrapper">usd value</div>
                </th>
                <th class="table__thead__th text-center">
                    <div class="table__thead__th__wrapper">Action</div>
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="record even">
                <td><img src="./Dollar.png" alt="USD" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Dollar (USD)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="spacer top-spacer">
                <td style="background-color: rgb(0, 0, 39);" colspan="7"></td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/btc/84.png" alt="bt" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Bitcoin (BTC)</td>
                <td><?php echo $_SESSION['BTC']; ?></td>
                <td>0</td>
                <td class="text-bold text-large"><?php echo $_SESSION['BTC']; ?></td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/xrp/84.png" alt="xrp" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Ripple (XRP)</td>
                <td><?php echo $_SESSION['XRP']; ?></td>
                <td>0</td>
                <td class="text-bold text-large"><?php echo $_SESSION['XRP']; ?></td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/ltc/84.png" alt="ltc" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Litecoin (LTC)</td>
                <td><?php echo $_SESSION['LTC']; ?></td>
                <td>0</td>
                <td class="text-bold text-large"><?php echo $_SESSION['LTC']; ?></td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/dash/84.png" alt="dash" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Dash (DASH)</td>
                <td><?php echo $_SESSION['DASH']; ?></td>
                <td>0</td>
                <td class="text-bold text-large"><?php echo $_SESSION['DASH']; ?></td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/eth/84.png" alt="eth" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Ethereum (ETH)</td>
                <td><?php echo $_SESSION['ETH']; ?></td>
                <td>0</td>
                <td class="text-bold text-large"><?php echo $_SESSION['ETH']; ?></td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <!-- <tr class="record even">
                <td><img src="https://media.wazirx.com/media/trx/84.png" alt="trx" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Tron (TRX)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr> -->
            <!-- <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/eos/84.png" alt="eos" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">EOS (EOS)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr> -->
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/zil/84.png" alt="zil" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Zilliqa (ZIL)</td>
                <td><?php echo $_SESSION['ZIL']; ?></td>
                <td>0</td>
                <td class="text-bold text-large"><?php echo $_SESSION['ZIL']; ?></td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <!-- <tr class="record odd">
                <td><svg viewBox="0 0 16 16" width="16" height="16" fill="#3067f0"><path d="M0.686004027,14.6625193 L15.2779291,14.6625193 L15.2779291,13.2858989 L0.686004027,13.2858989 L0.686004027,14.6625193 Z M3.59438578,6.39853446 L0,3.85257368 L0.66076642,11.450902 L3.59438578,6.39853446 Z M5.16049397,12.3183384 L15.2752677,12.3183384 L16,3.9847265 L5.16049397,12.3183384 Z M11.4196039,6.2327928 L3.50417281,12.3183384 L1.32428603,12.3183384 L5.3464263,5.39132807 L7.91377916,1 L11.4196039,6.2327928 Z"></path></svg></td>
                <td class="text-bold">WazirX Token (WRX)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr> -->
            <!-- <tr class="record even">
                <td><img src="https://media.wazirx.com/media/ncash/84.png" alt="ncash" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Nucleus Vision (NCASH)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/bat/84.png" alt="bat" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Basic Attention Token (BAT)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/gnt/84.png" alt="gnt" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Golem (GNT)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/zrx/84.png" alt="zrx" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">0x Protocol (ZRX)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr> -->
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/storm/84.png" alt="storm" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Storm (STORM)</td>
                <td><?php echo $_SESSION['STORM']; ?></td>
                <td>0</td>
                <td class="text-bold text-large"><?php echo $_SESSION['STORM']; ?></td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <!-- <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/req/84.png" alt="req" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Request Network (REQ)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/sub/84.png" alt="sub" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Substratum (SUB)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr> -->
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/nuls/84.png" alt="nuls" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Nuls (NULS)</td>
                <td><?php echo $_SESSION['NULS']; ?></td>
                <td>0</td>
                <td class="text-bold text-large"><?php echo $_SESSION['NULS']; ?></td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/icx/84.png" alt="icx" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Icon (ICX)</td>
                <td><?php echo $_SESSION['ICX']; ?></td>
                <td>0</td>
                <td class="text-bold text-large"><?php echo $_SESSION['ICX']; ?></td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <!-- <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/omg/84.png" alt="omg" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">OmiseGO (OMG)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/poly/84.png" alt="poly" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Polymath (POLY)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/iost/84.png" alt="iost" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">IOSToken (IOST)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/snt/84.png" alt="snt" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Status Network (SNT)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/npxs/84.png" alt="npxs" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">PundiX (NPXS)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/cs/84.png" alt="cs" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Credits (CS)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/fun/84.png" alt="fun" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">FunFair (FUN)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/poe/84.png" alt="poe" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Po.et (POE)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/theta/84.png" alt="theta" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Theta Token (THETA)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/dent/84.png" alt="dent" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Dent (DENT)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/qkc/84.png" alt="qkc" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">QuarkChain Token (QKC)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/stq/84.png" alt="stq" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Storiqa (STQ)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/zco/84.png" alt="zco" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Zebi (ZCO)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/hot/84.png" alt="hot" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Holo (HOT)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/ocn/84.png" alt="ocn" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Odyssey (OCN)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/noah/84.png" alt="noah" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Noah Coin (NOAH)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/banca/84.png" alt="banca" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Banca (BANCA)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr> -->
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/usdt/84.png" alt="usdt" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Tether USD (USDT)</td>
                <td><?php echo $_SESSION['BTCT']; ?></td>
                <td>0</td>
                <td class="text-bold text-large"><?php echo $_SESSION['BTCT']; ?></td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <!-- <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/tusd/84.png" alt="tusd" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">True USD (TUSD)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr> -->
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/bch/84.png" alt="bch" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Bitcoin Cash (BCH)</td>
                <td><?php echo $_SESSION['BCH']; ?></td>
                <td>0</td>
                <td class="text-bold text-large"><?php echo $_SESSION['BCH']; ?></td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <!-- <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/bchsv/84.png" alt="bchsv" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Bitcoin Cash SV (BCHSV)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/pax/84.png" alt="pax" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Paxos Standard Token (PAX)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/usdc/84.png" alt="usdc" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">USD Coin (USDC)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/xlm/84.png" alt="xlm" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Stellar (XLM)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/xtz/84.png" alt="xtz" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Tezos (XTZ)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/btt/84.png" alt="btt" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">BitTorrent (BTT)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/fet/84.png" alt="fet" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Fetch.AI (FET)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/tfuel/84.png" alt="tfuel" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Theta Fuel (TFUEL)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/idr/84.png" alt="idr" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Rupiah (IDR)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/rub/84.png" alt="rub" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Russian Ruble (RUB)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/uah/84.png" alt="uah" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Hryvnia (UAH)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/celr/84.png" alt="celr" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Celer Network (CELR)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr> -->
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/matic/84.png" alt="matic" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Matic Network (MATIC)</td>
                <td><?php echo $_SESSION['MATIC']; ?></td>
                <td>0</td>
                <td class="text-bold text-large"><?php echo $_SESSION['MATIC']; ?></td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/ada/84.png" alt="ada" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Cardano (ADA)</td>
                <td><?php echo $_SESSION['ADA']; ?></td>
                <td>0</td>
                <td class="text-bold text-large"><?php echo $_SESSION['ADA']; ?></td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/rvn/84.png" alt="rvn" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Ravencoin (RVN)</td>
                <td><?php echo $_SESSION['RVN']; ?></td>
                <td>0</td>
                <td class="text-bold text-large"><?php echo $_SESSION['RVN']; ?></td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/xmr/84.png" alt="xmr" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Monero (XMR)</td>
                <td><?php echo $_SESSION['XMR']; ?></td>
                <td>0</td>
                <td class="text-bold text-large"><?php echo $_SESSION['XMR']; ?></td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/atom/84.png" alt="atom" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Cosmos (ATOM)</td>
                <td><?php echo $_SESSION['ATOM']; ?></td>
                <td>0</td>
                <td class="text-bold text-large"><?php echo $_SESSION['ATOM']; ?></td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <!-- <tr class="record even">
                <td><img src="https://media.wazirx.com/media/algo/84.png" alt="algo" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Algorand (ALGO)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/link/84.png" alt="link" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Chainlink (LINK)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/qtum/84.png" alt="qtum" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Qtum (QTUM)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr> -->
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/etc/84.png" alt="etc" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Ethereum Classic (ETC)</td>
                <td><?php echo $_SESSION['ETC']; ?></td>
                <td>0</td>
                <td class="text-bold text-large"><?php echo $_SESSION['ETC']; ?></td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <!-- <tr class="record even">
                <td><img src="https://media.wazirx.com/media/iota/84.png" alt="iota" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">MIOTA (IOTA)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/zec/84.png" alt="zec" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Zcash (ZEC)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/waves/84.png" alt="waves" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Waves (WAVES)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/ftm/84.png" alt="ftm" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Fantom (FTM)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/enj/84.png" alt="enj" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Enjin (ENJ)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/lsk/84.png" alt="lsk" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Lisk (LSK)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/steem/84.png" alt="steem" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Steem (STEEM)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/xvg/84.png" alt="xvg" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Verge (XVG)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/loom/84.png" alt="loom" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Loom (LOOM)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/mana/84.png" alt="mana" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Decentraland (MANA)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/rep/84.png" alt="rep" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Augur (REP)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/fuel/84.png" alt="fuel" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Etherparty (FUEL)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/blz/84.png" alt="blz" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Bluzelle (BLZ)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/xzc/84.png" alt="xzc" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Zcoin (XZC)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/nano/84.png" alt="nano" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Nano (NANO)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/sc/84.png" alt="sc" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Siacoin (SC)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/btg/84.png" alt="btg" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Bitcoin Gold (BTG)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/xem/84.png" alt="xem" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Nem (XEM)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/bts/84.png" alt="bts" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">BitShares (BTS)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/ardr/84.png" alt="ardr" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Ardor (ARDR)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/strat/84.png" alt="strat" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Stratis (STRAT)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/nas/84.png" alt="nas" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Nebulas (NAS)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/ngn/84.png" alt="ngn" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Nigerian Naira (NGN)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/sar/84.png" alt="sar" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Saudi Riyal (SAR)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/eur/84.png" alt="eur" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Euro (EUR)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/try/84.png" alt="try" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Turkish Lira (TRY)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/win/84.png" alt="win" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">WINk (WIN)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr> -->
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/bnb/84.png" alt="bnb" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Binance Coin (BNB)</td>
                <td><?php echo $_SESSION['BNB']; ?></td>
                <td>0</td>
                <td class="text-bold text-large"><?php echo $_SESSION['BNB']; ?></td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <!-- <tr class="record even">
                <td><img src="https://media.wazirx.com/media/chz/84.png" alt="chz" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Chiliz (CHZ)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/kava/84.png" alt="kava" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Kava (KAVA)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/ankr/84.png" alt="ankr" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Ankr (ANKR)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/busd/84.png" alt="busd" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">BUSD (BUSD)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/one/84.png" alt="one" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Harmony (ONE)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/ogn/84.png" alt="ogn" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">OriginToken (OGN)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/hive/84.png" alt="hive" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Hive (HIVE)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/ftt/84.png" alt="ftt" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">FTX Token (FTT)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/band/84.png" alt="band" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Band Protocol (BAND)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/jst/84.png" alt="jst" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">JUST (JST)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/ctsi/84.png" alt="ctsi" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Cartesi (CTSI)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr> -->
            <!-- <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/chr/84.png" alt="chr" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Chromia (CHR)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/tomo/84.png" alt="tomo" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Tomochain (TOMO)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/stmx/84.png" alt="stmx" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">StormX (STMX)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/gxs/84.png" alt="gxs" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">GXChain (GXS)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/lrc/84.png" alt="lrc" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Loopring (LRC)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr> -->
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/doge/84.png" alt="doge" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Dogecoin (DOGE)</td>
                <td><?php echo $_SESSION['DOGE']; ?></td>
                <td>0</td>
                <td class="text-bold text-large"><?php echo $_SESSION['DOGE']; ?></td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <!-- <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/neo/84.png" alt="neo" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Neo (NEO)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/hbar/84.png" alt="hbar" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Hedera Hashgraph (HBAR)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/storj/84.png" alt="storj" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Storj (STORJ)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/comp/84.png" alt="comp" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Compound (COMP)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/coti/84.png" alt="coti" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">COTI (COTI)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/dgb/84.png" alt="dgb" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">DigiByte (DGB)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/grs/84.png" alt="grs" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Groestlcoin (GRS)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/snx/84.png" alt="snx" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Synthetix Network Token (SNX)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/lend/84.png" alt="lend" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Aave (LEND)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/ren/84.png" alt="ren" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">REN (REN)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/sxp/84.png" alt="sxp" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Swipe (SXP)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/mkr/84.png" alt="mkr" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Maker (MKR)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/ava/84.png" alt="ava" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Travala.com (AVA)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/bal/84.png" alt="bal" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Balancer (BAL)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/srm/84.png" alt="srm" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Serum (SRM)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/egld/84.png" alt="egld" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Elrond Gold (EGLD)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/cos/84.png" alt="cos" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Contentos (COS)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/nbs/84.png" alt="nbs" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">New BitShares (NBS)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/aion/84.png" alt="aion" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">AION (AION)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/dot/84.png" alt="dot" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Polkadot (DOT)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/yfi/84.png" alt="yfi" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Yearn Finance (YFI)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/iotx/84.png" alt="iotx" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Iotx (IOTX)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/sand/84.png" alt="sand" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Sandbox (SAND)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/uni/84.png" alt="uni" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Uniswap (UNI)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/data/84.png" alt="data" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Streamr DATAcoin (DATA)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/paxg/84.png" alt="paxg" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Paxos Gold (PAXG)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/cream/84.png" alt="cream" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Cream Finance (CREAM)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/uma/84.png" alt="uma" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">UMA (UMA)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/ksm/84.png" alt="ksm" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Kusama (KSM)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/yfii/84.png" alt="yfii" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">DFI.Money (YFII)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/bzrx/84.png" alt="bzrx" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">bZx Protocol (BZRX)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/trb/84.png" alt="trb" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Tellor (TRB)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/adx/84.png" alt="adx" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">AdEx Network (ADX)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/aave/84.png" alt="aave" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Aave (AAVE)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/fil/84.png" alt="fil" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Filecoin (FIL)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/crv/84.png" alt="crv" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Curve DAO Token (CRV)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/near/84.png" alt="near" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">NEAR Protocol (NEAR)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/hnt/84.png" alt="hnt" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Helium (HNT)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/avax/84.png" alt="avax" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Avalanche (AVAX)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/oxt/84.png" alt="oxt" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Orchid (OXT)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/dock/84.png" alt="dock" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Dock (DOCK)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/dusk/84.png" alt="dusk" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Dusk Network (DUSK)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/wtc/84.png" alt="wtc" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Waltonchain (WTC)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/strax/84.png" alt="strax" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Stratis (STRAX)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/inj/84.png" alt="inj" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Injective Protocol (INJ)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/vet/84.png" alt="vet" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">VeChain (VET)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/mtl/84.png" alt="mtl" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Metal (MTL)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/front/84.png" alt="front" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Frontier (FRONT)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/glm/84.png" alt="glm" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Golem (GLM)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/sushi/84.png" alt="sushi" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">SushiSwap (SUSHI)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/bcha/84.png" alt="bcha" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Bitcoin Cash ABC (BCHA)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/easy/84.png" alt="easy" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">EasyFi (EASY)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/firo/84.png" alt="firo" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Firo (FIRO)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/dexe/84.png" alt="dexe" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">DeXe (DEXE)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/grt/84.png" alt="grt" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">The Graph (GRT)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/bnt/84.png" alt="bnt" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Bancor (BNT)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/rsr/84.png" alt="rsr" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Reserve Rights (RSR)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/1inch/84.png" alt="1inch" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">1inch (1INCH)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/luna/84.png" alt="luna" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Terra (LUNA)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/pundix/84.png" alt="pundix" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Pundi X (PUNDIX)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/ckb/84.png" alt="ckb" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Nervos Network (CKB)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/vib/84.png" alt="vib" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Viberate (VIB)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/gto/84.png" alt="gto" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Gifto (GTO)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/uft/84.png" alt="uft" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">UniLend (UFT)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/push/84.png" alt="push" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Ethereum Push Notification Service (PUSH)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/tko/84.png" alt="tko" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Toko Token (TKO)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/cvc/84.png" alt="cvc" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Civic (CVC)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>-->
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/cake/84.png" alt="cake" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">PancakeSwap (CAKE)</td>
                <td><?php echo $_SESSION['CAKE']; ?></td>
                <td>0</td>
                <td class="text-bold text-large"><?php echo $_SESSION['CAKE']; ?></td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
           <!-- <tr class="record even">
                <td><img src="https://media.wazirx.com/media/ez/84.png" alt="ez" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Easy V2 (EZ)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/ark/84.png" alt="ark" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Ark (ARK)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/kmd/84.png" alt="kmd" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Komodo (KMD)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/shib/84.png" alt="shib" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">SHIBA INU (SHIB)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/rlc/84.png" alt="rlc" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">iExecRLC (RLC)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/reef/84.png" alt="reef" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Reef (REEF)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/icp/84.png" alt="icp" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Internet Computer (ICP)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/ont/84.png" alt="ont" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Ontology (ONT)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/pnt/84.png" alt="pnt" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">pNetwork (PNT)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/xvs/84.png" alt="xvs" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Venus (XVS)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/dcr/84.png" alt="dcr" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Decred (DCR)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/mdx/84.png" alt="mdx" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Mdex (MDX)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/pha/84.png" alt="pha" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Phala Network (PHA)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/rune/84.png" alt="rune" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">THORChain (RUNE)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/mir/84.png" alt="mir" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Mirror Protocol (MIR)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/nkn/84.png" alt="nkn" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">NKN (NKN)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record odd">
                <td><img src="https://media.wazirx.com/media/dnt/84.png" alt="dnt" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">district0x (DNT)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr>
            <tr class="record even">
                <td><img src="https://media.wazirx.com/media/keep/84.png" alt="keep" class="sc-fjdhpX gcvOpy"></td>
                <td class="text-bold">Keep Network (KEEP)</td>
                <td>0</td>
                <td>0</td>
                <td class="text-bold text-large">0</td>
                <td>0.00</td>
                <td align="center">
                    <div width="100%" class="sc-bdVaJa sc-iSDuPN gPpbcn"><button class="sc-dnqmqq deposit-btn sc-fZwumE cneiqS" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Deposit</span></button><button class="sc-dnqmqq withdraw-btn sc-fQejPQ WuhiP" type="button" color="#929292"><span color="#929292" class="sc-bwzfXH kCgltP">Withdraw</span></button></div>
                </td>
            </tr> -->
        </tbody>
    </table>
    <script src="" async defer></script>
</body>

</html>