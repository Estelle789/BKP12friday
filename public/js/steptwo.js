function yourHome(e){
    e = e || event;
    var cfa= e.srcElement || e.target;
    if (cfa.type !== 'checkbox') {return true;}
    var cfaxs = document.getElementById('radiocbhome').getElementsByTagName('input'), i=cfaxs.length;
     while(i--) {
         if (cfaxs[i].type && cfaxs[i].type == 'checkbox' && cfaxs[i].id !== cfa.id) {
          cfaxs[i].checked = false;
         }
     }
     // if the click should always result in a checked checkbox 
     // unconmment this:
     // cb.checked = true;
 }
 function yourAnimal(e){
    e = e || event;
    var cfan= e.srcElement || e.target;
    if (cfan.type !== 'checkbox') {return true;}
    var cfanxs = document.getElementById('radiocbanimal').getElementsByTagName('input'), i=cfanxs.length;
     while(i--) {
         if (cfanxs[i].type && cfanxs[i].type == 'checkbox' && cfanxs[i].id !== cfan.id) {
          cfanxs[i].checked = false;
         }
     }
     // if the click should always result in a checked checkbox 
     // unconmment this:
     // cb.checked = true;
 }
 function garden(e){
    e = e || event;
    var cfg= e.srcElement || e.target;
    if (cfg.type !== 'checkbox') {return true;}
    var cfgxs = document.getElementById('radiocbgarden').getElementsByTagName('input'), i=cfgxs.length;
     while(i--) {
         if (cfgxs[i].type && cfgxs[i].type == 'checkbox' && cfgxs[i].id !== cfg.id) {
          cfgxs[i].checked = false;
         }
     }
     // if the click should always result in a checked checkbox 
     // unconmment this:
     // cb.checked = true;
 }
 function eggs(e){
    e = e || event;
    var cfe= e.srcElement || e.target;
    if (cfe.type !== 'checkbox') {return true;}
    var cfexs = document.getElementById('radiocbeggs').getElementsByTagName('input'), i=cfexs.length;
     while(i--) {
         if (cfexs[i].type && cfexs[i].type == 'checkbox' && cfexs[i].id !== cfe.id) {
          cfexs[i].checked = false;
         }
     }
     // if the click should always result in a checked checkbox 
     // unconmment this:
     // cb.checked = true;
 }
 function smoke(e){
    e = e || event;
    var cfsm= e.srcElement || e.target;
    if (cfsm.type !== 'checkbox') {return true;}
    var cfsmxs = document.getElementById('radiocbsmoke').getElementsByTagName('input'), i=cfsmxs.length;
     while(i--) {
         if (cfsmxs[i].type && cfsmxs[i].type == 'checkbox' && cfsmxs[i].id !== cfsm.id) {
            cfsmxs[i].checked = false;
         }
     }
     // if the click should always result in a checked checkbox 
     // unconmment this:
     // cb.checked = true;
 }
 function dogCb(e){
    e = e || event;
    var cfd= e.srcElement || e.target;
    if (cfd.type !== 'checkbox') {return true;}
    var cfdxs = document.getElementById('radiocbdogC').getElementsByTagName('input'), i=cfdxs.length;
     while(i--) {
         if (cfdxs[i].type && cfdxs[i].type == 'checkbox' && cfdxs[i].id !== cfd.id) {
            cfdxs[i].checked = false;
         }
     }
     // if the click should always result in a checked checkbox 
     // unconmment this:
     // cb.checked = true;
 }
 function hrs(e){
    e = e || event;
    var chr= e.srcElement || e.target;
    if (chr.type !== 'checkbox') {return true;}
    var chrxs = document.getElementById('radiocbhr').getElementsByTagName('input'), i=chrxs.length;
     while(i--) {
         if (chrxs[i].type && chrxs[i].type == 'checkbox' && chrxs[i].id !== chr.id) {
            chrxs[i].checked = false;
         }
     }
     // if the click should always result in a checked checkbox 
     // unconmment this:
     // cb.checked = true;
 }
 function ccc(e){
    e = e || event;
    var ccc= e.srcElement || e.target;
    if (ccc.type !== 'checkbox') {return true;}
    var cccxs = document.getElementById('radiocbchild').getElementsByTagName('input'), i=cccxs.length;
     while(i--) {
         if (cccxs[i].type && cccxs[i].type == 'checkbox' && cccxs[i].id !== ccc.id) {
            cccxs[i].checked = false;
         }
     }
     // if the click should always result in a checked checkbox 
     // unconmment this:
     // cb.checked = true;
 }
 
 function gd(e){
    e = e || event;
    var gd= e.srcElement || e.target;
    if (gd.type !== 'checkbox') {return true;}
    var gdxs = document.getElementById('radiocbgen').getElementsByTagName('input'), i=gdxs.length;
     while(i--) {
         if (gdxs[i].type && gdxs[i].type == 'checkbox' && gdxs[i].id !== gd.id) {
            gdxs[i].checked = false;
         }
     }
     // if the click should always result in a checked checkbox 
     // unconmment this:
     // cb.checked = true;
 }
 function cbclick(e){
    e = e || event;
    var cb = e.srcElement || e.target;
    if (cb.type !== 'checkbox') {return true;}
    var cbxs = document.getElementById('radiocb').getElementsByTagName('input'), i=cbxs.length;
     while(i--) {
         if (cbxs[i].type && cbxs[i].type == 'checkbox' && cbxs[i].id !== cb.id) {
          cbxs[i].checked = false;
         }
     }
     // if the click should always result in a checked checkbox 
     // unconmment this:
     // cb.checked = true;
 }
 function cbclic(e){
    e = e || event;
    var ct = e.srcElement || e.target;
    if (ct.type !== 'checkbox') {return true;}
    var ctxs = document.getElementById('radiocbd').getElementsByTagName('input'), i=ctxs.length;
     while(i--) {
         if (ctxs[i].type && ctxs[i].type == 'checkbox' && ctxs[i].id !== ct.id) {
          ctxs[i].checked = false;
         }
     }
     // if the click should always result in a checked checkbox 
     // unconmment this:
     // cb.checked = true;
 }
 function yesNo(e){
    e = e || event;
    var cs= e.srcElement || e.target;
    if (cs.type !== 'checkbox') {return true;}
    var csxs = document.getElementById('radiocbyn').getElementsByTagName('input'), i=csxs.length;
     while(i--) {
         if (csxs[i].type && csxs[i].type == 'checkbox' && csxs[i].id !== cs.id) {
          csxs[i].checked = false;
         }
     }
     // if the click should always result in a checked checkbox 
     // unconmment this:
     // cb.checked = true;
 }
 function hours(e){
    e = e || event;
    var ch= e.srcElement || e.target;
    if (ch.type !== 'checkbox') {return true;}
    var chxs = document.getElementById('radiocbh').getElementsByTagName('input'), i=chxs.length;
     while(i--) {
         if (chxs[i].type && chxs[i].type == 'checkbox' && chxs[i].id !== ch.id) {
          chxs[i].checked = false;
         }
     }
     // if the click should always result in a checked checkbox 
     // unconmment this:
     // cb.checked = true;
 }
 function flexible1(e){
    e = e || event;
    var cf= e.srcElement || e.target;
    if (cf.type !== 'checkbox') {return true;}
    var cfxs = document.getElementById('radiocbf').getElementsByTagName('input'), i=cfxs.length;
     while(i--) {
         if (cfxs[i].type && cfxs[i].type == 'checkbox' && cfxs[i].id !== cf.id) {
          cfxs[i].checked = false;
         }
     }
     // if the click should always result in a checked checkbox 
     // unconmment this:
     // cb.checked = true;
 }
 function flexible2(e){
    e = e || event;
    var cft= e.srcElement || e.target;
    if (cft.type !== 'checkbox') {return true;}
    var cftxs = document.getElementById('radiocbft').getElementsByTagName('input'), i=cftxs.length;
     while(i--) {
         if (cftxs[i].type && cftxs[i].type == 'checkbox' && cftxs[i].id !== cft.id) {
          cftxs[i].checked = false;
         }
     }
     // if the click should always result in a checked checkbox 
     // unconmment this:
     // cb.checked = true;
 }
 // Dynamic content Controlling with javascript
 // Parse the URL parameter
 function servicesExtra(e){
    e = e || event;
    var dg= e.srcElement || e.target;
    if (dg.type !== 'checkbox') {return true;}
    var dgxs = document.getElementById('radiocbdg').getElementsByTagName('input'), i=dgxs.length;
     while(i--) {
         if (dgxs[i].type && dgxs[i].type == 'checkbox' && dgxs[i].id !== dg.id) {
          dgxs[i].checked = false;
         }
     }
     // if the click should always result in a checked checkbox 
     // unconmment this:
     // cb.checked = true;
 }