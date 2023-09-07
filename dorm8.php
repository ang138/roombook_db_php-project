<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<div class="main_content">
        <div class="header"><h2>จองห้องพัก</h2></div>  
        <div class="info">
        	<form name="booking" action="booking.php" method="post">
        			<input type="hidden" name="dorm" required value="หอพัก1" readonly>

                    <label>ภาคเรียนที่ : </label>
        			<select name="term" required>
	                <option value="">---กรุณาเลือก---</option>
	                <option value="1">1</option>
	                <option value="2">2</option>
                    </select><br><br>

                    &nbsp&nbsp<label>ชั้นที่1</label>
                    <fieldset>
                    <input type="checkbox" name="rmnum" value="1101">1101<br/>
                    <input type="checkbox" name="rmnum" value="1102">1102<br/>
                    <input type="checkbox" name="rmnum" value="1103">1103<br/>
                    <input type="checkbox" name="rmnum" value="1104">1104<br/>
                    <input type="checkbox" name="rmnum" value="1105">1105<br/>
                    <input type="checkbox" name="rmnum" value="1106">1106<br/>
                    <input type="checkbox" name="rmnum" value="1107">1107<br/>
                    <input type="checkbox" name="rmnum" value="1108">1108<br/>
                    <input type="checkbox" name="rmnum" value="1109">1109<br/>
                    <input type="checkbox" name="rmnum" value="1110">1110<br/>
                    <input type="checkbox" name="rmnum" value="1111">1111<br/>
                    <input type="checkbox" name="rmnum" value="1112">1112<br/>
                    <input type="checkbox" name="rmnum" value="1113">1113<br/>
                    <input type="checkbox" name="rmnum" value="1114">1114<br/>
                    <input type="checkbox" name="rmnum" value="1115">1115<br/>
                    <input type="checkbox" name="rmnum" value="1116">1116<br/>
                    <input type="checkbox" name="rmnum" value="1117">1117<br/>
                    <input type="checkbox" name="rmnum" value="1118">1118<br/>
                    <input type="checkbox" name="rmnum" value="1119">1119<br/>
                    <input type="checkbox" name="rmnum" value="1120">1120<br/>
        		    </fieldset><br>
        		    &nbsp&nbsp<label>ชั้นที่2</label>
                    <fieldset>
                    <input type="checkbox" name="rmnum" value="1201">1201<br/>
                    <input type="checkbox" name="rmnum" value="1202">1202<br/>
                    <input type="checkbox" name="rmnum" value="1203">1203<br/>
                    <input type="checkbox" name="rmnum" value="1204">1204<br/>
                    <input type="checkbox" name="rmnum" value="1205">1205<br/>
                    <input type="checkbox" name="rmnum" value="1206">1206<br/>
                    <input type="checkbox" name="rmnum" value="1207">1207<br/>
                    <input type="checkbox" name="rmnum" value="1208">1208<br/>
                    <input type="checkbox" name="rmnum" value="1209">1209<br/>
                    <input type="checkbox" name="rmnum" value="1210">1210<br/>
                    <input type="checkbox" name="rmnum" value="1211">1211<br/>
                    <input type="checkbox" name="rmnum" value="1212">1212<br/>
                    <input type="checkbox" name="rmnum" value="1213">1213<br/>
                    <input type="checkbox" name="rmnum" value="1214">1214<br/>
                    <input type="checkbox" name="rmnum" value="1215">1215<br/>
                    <input type="checkbox" name="rmnum" value="1216">1216<br/>
                    <input type="checkbox" name="rmnum" value="1217">1217<br/>
                    <input type="checkbox" name="rmnum" value="1218">1218<br/>
                    <input type="checkbox" name="rmnum" value="1219">1219<br/>
                    <input type="checkbox" name="rmnum" value="1220">1220<br/>
        		    </fieldset>
        		    &nbsp&nbsp<input type="submit" value="เช่าห้อง"/><br><br>
        	</form>
        	

        </div>
    </div>
</body>
</html>