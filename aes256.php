<?php ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>Encryption / Decryption File AES 256</title>
		<link rel="stylesheet" href="style.css">
		<link href="https://getbootstrap.com/docs/5.3/assets/css/docs.css" rel="stylesheet">
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>	
	</head>
	<body>
		<header>
			<div class="container">
                <div class="header-left">
				    <a href="https://diskominfotik.sumbarprov.go.id/"><img style="max-width:60px; margin-bottom:8px;" src="tuah.png"></a>
                    <a href="https://csirt.sumbarprov.go.id/"><img style="max-width:85px; margin-top: 2px;" src="logocsirt.png"></a>
                </div>
                <div class="header-right">
                    <a href="https://www.unand.ac.id/"><img style="max-width:75px; margin-top: 0px;" src="unand.png"></a>
                    <a href="halmen.php"><img style="max-width:180px; margin-top: 5px;" src="aes.png"></a>
                    <a href="logout.php" class="logout" style="margin-top: 25px; margin-left: 5px; margin-right: -15px;">
                        Log Out <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0v2z"/>
                        <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
                        </svg>
                    </a>   
                </div>    
            </div>
		</header>
        <div class="button-top">
		    <div class=container>
				<h1>
				<button class="button" id="btnDivEncrypt" onClick="javascript:switchdiv('encrypt');">Enkripsi</button>
				<button class="button" id="btnDivDecrypt" onClick="javascript:switchdiv('decrypt');">Dekripsi</button>
				</h1>
		    </div>
        </div>
        <div class="conten-top1">
            <div class="container" id=divEncryptfile>
                <div class="contens">
                    <div class="top-header">    
                        <h2>Enkripsi File</h2>
                    </div>
                        <div class="drag">
                            <div class=dropzone id="encdropzone" ondrop="drop_handler(event);" ondragover="dragover_handler(event);" ondragend="dragend_handler(event);">
                                <h3>Drag dan drop  atau telusuri File</h3>
                                <p><i>(Ukuran file tidak boleh melebihi 350 MB)</i></p>
                                <a class="btn" onclick=javascript:encrypt.click();>Pilih File</a>
                                <p><span id=spnencfilename></span></p>
                                <input type="file" id="encrypt" style="display:none" onchange="selectfile(this.files)">
                            </div>
                        </div>	
                        <!--<div class="pass-content">
                            <form class="pass-form">
                                <div class="input-div-one">
                                    <div class="input-field">-->
                                        <input class="form-control" id="encpassword" type="password" name="password" value="rndmltrktlhm" hidden>
                                        <!--<label>Password (Minimum 8 Karakter)</label>-->
                                    <!--</div>
                                </div>
                                <div class="input-div-one">
                                    <div class="input-field">
                                        <input class="form-control" id="txtEncpassphraseretype" type="password" name="password" required spellcheck="false" size=30 onkeyup=javascript:encvalidate(); value=''>
                                        <label>Konfirmasi Password</label>
                                        <div class="divTableCell"><span class=greenspan id=spnCheckretype></span></div>
                                    </div>
                                </div>
                            </form>
                        </div>-->
                            <div class="but"><button class="btn" type="button" id="encryptbutton">Encrypt File</button></div>
                            <div class="but"><span id=spnEncstatus></span></div>
                        <div class="but">
                            <a id=aEncsavefile hidden><button class="btn">Download Encrypted File</button></a>
                        </div>
                </div>
            </div>
        </div>
        <div class="conten-top2">
            <div class="container" id=divDecryptfile>
                <div class="contens">
                    <div class="top-header">        
                        <h2>Dekripsi File</h2>
                    </div>
                    <div class="drag">
                        <div class=dropzone  id="decdropzone" ondrop="drop_handler(event);" ondragover="dragover_handler(event);" ondragend="dragend_handler(event);">
                            <h3>Drag dan drop atau telusuri File</h3>
                            <p><i>(Hanya file yang di Enkripsi dengan website ini yang dapat di Dekripsi)</i></p>
                            <a class="btn" role=button onclick=javascript:decrypt.click();>Pilih File</a>
                            <p><span id=spndecfilename></span></p>
                            <input type="file" id="decrypt" style="display:none" onchange="selectfile(this.files)">
                        </div>
                    </div>
                    <!--<div class="divTable">
                        <form class="pass-form">
                            <div class="input-div-one">
                                <div class="input-field">-->
                                    <input id="decpassword" type="password" name="password" value="rndmltrktlhm" hidden>
                                    <!--<label>Password</label>
                                </div>
                            </div>
                        </form>
                    </div>-->
                        <div class="but"><button type="button" class="btn" id="decryptbutton">Decrypt File</button></div>
                        <div class="but"><span id=spnDecstatus></span></div>
                    <div class="but">
                        <a id=aDecsavefile hidden><button class="btn">Download Decrypted File</button></a>
                    </div>
                </div>
            </div>   
        </div>
        <footer>
            <div class="container">
                <center><img src="fotlogo.png"><center>
                <p>“You effect the world by what you browse.” — Tim Berners-Lee</p>
                <p><b>Dinas Komunikasi, Informatika, dan Statistik Sumamtera Barat</b></p>
                <p><b>Magang 2023 | </b>Project by : <span><a href="https://www.instagram.com/randamultri/">RND</a></span></p>
            </div>
        </footer>    
        <script>
            var mode=null;
            var objFile=null;
            switchdiv('encrypt');
        
            function switchdiv(t) {
                if(t=='encrypt') {
                    divEncryptfile.style.display='block';
                    divDecryptfile.style.display='none';
                    btnDivEncrypt.disabled=true;
                    btnDivDecrypt.disabled=false;
                    mode='encrypt';
                } else if(t=='decrypt') {
                    divEncryptfile.style.display='none';
                    divDecryptfile.style.display='block';
                    btnDivEncrypt.disabled=false;
                    btnDivDecrypt.disabled=true;
                    mode='decrypt';
                }
            }
            /*function encvalidate() {
                if(encpassword.value.length>=8 && encpassword.value==txtEncpassphraseretype.value) { 
                  spnCheckretype.classList.add("greenspan");
                  spnCheckretype.classList.remove("redspan");
                  spnCheckretype.innerHTML='&#10004;';
                } else { 
                  spnCheckretype.classList.remove("greenspan");
                  spnCheckretype.classList.add("redspan");
                  spnCheckretype.innerHTML='&#10006;';
                }
        
                if( encpassword.value.length>=8 && encpassword.value==txtEncpassphraseretype.value && objFile ) { encryptbutton.disabled=false; } else { encryptbutton.disabled=true; }
            }
        
            function decvalidate() {
                if( decpassword.value.length>0 && objFile ) { 
                    decryptbutton.disabled=false; 
                } 
                    else { 
                        decryptbutton.disabled=true; 
                    }
            }*/
            function drop_handler(ev) {
                console.log("Drop");
                ev.preventDefault();
                // If dropped items aren't files, reject them
                var dt = ev.dataTransfer;
                if (dt.items) {
                    // Use DataTransferItemList interface to access the file(s)
                    for (var i=0; i < dt.items.length; i++) {
                        if (dt.items[i].kind == "file") {
                            var f = dt.items[i].getAsFile();
                            console.log("... file[" + i + "].name = " + f.name);
                            objFile=f;
                        }
                    }
                } else {
                    // Use DataTransfer interface to access the file(s)
                    for (var i=0; i < dt.files.length; i++) {
                        console.log("... file[" + i + "].name = " + dt.files[i].name);
                    }  
                    objFile=file[0];
                }		 
                displayfile()
                if(mode=='encrypt') { encvalidate(); } else if(mode=='decrypt') { decvalidate(); }
            }
        
            function dragover_handler(ev) {
                console.log("dragOver");
                // Prevent default select and drag behavior
                ev.preventDefault();
            }
        
            function dragend_handler(ev) {
                console.log("dragEnd");
                // Remove all of the drag data
                var dt = ev.dataTransfer;
                if (dt.items) {
                    // Use DataTransferItemList interface to remove the drag data
                    for (var i = 0; i < dt.items.length; i++) {
                        dt.items.remove(i);
                    }
                } else {
                    // Use DataTransfer interface to remove the drag data
                    ev.dataTransfer.clearData();
                }
            }
        
            function selectfile(Files) {
                objFile=Files[0];
                displayfile()
                if(mode=='encrypt') { 
                    encvalidate(); 
                } 	else if(mode=='decrypt') { 
                        decvalidate(); 
                    }
            }
        
            function displayfile() {
                var s;
                var sizes = ['Bytes', 'KB', 'MB', 'GB', 'TB'];
                var bytes=objFile.size;
                var i = parseInt(Math.floor(Math.log(bytes) / Math.log(1024)));
                if(i==0) { 
                    s=bytes + ' ' + sizes[i]; 
                } 
                    else { 
                        s=(bytes / Math.pow(1024, i)).toFixed(2) + ' ' + sizes[i]; 
                    }
        
                if(mode=='encrypt') { 
                    spnencfilename.textContent=objFile.name + ' (' + s + ')'; 
                } 	else if(mode=='decrypt') {  
                        spndecfilename.textContent=objFile.name + ' (' + s + ')'; 
                    } 
            }
           
            /*const errorBanner = document.querySelector(".error-banner");
            function showError(message) {
                errorBanner.style.display = "block";
                errorBanner.textContent = message;
            }
        
            const outputBanner = document.querySelector(".output-banner");
            function showOutput(message) {
                outputBanner.style.display = "block";
                outputBanner.textContent = message;
            }*/
        
            async function getKey(password, salt) {
                const keyMaterial = await window.crypto.subtle.importKey(
                    "raw",
                    new TextEncoder().encode(password),
                    {name: "PBKDF2"},
                    false,
                    ["deriveKey"]
                );
                return window.crypto.subtle.deriveKey(
                    {
                        name: "PBKDF2",
                        salt,
                        iterations: 100000,
                        hash: "SHA-256"
                    },
                    keyMaterial,
                    {
                        name: "AES-GCM",
                        length: 256
                    },
                    false,
                    ["encrypt", "decrypt"]
                );
            }
        
            
            const encInput = document.querySelector("#encrypt");
            
            const encPasswordInput = document.querySelector("#encpassword");
            document.querySelector("#encryptbutton").addEventListener("click", () => {
        
                // Validate stuff
                if (encInput.files == null || encInput.files[0] == null) {
                    spnEncstatus.classList.add("redspan");
		            spnEncstatus.innerHTML='<p>File Kosong,mohon tambahkan file.</p>';
                    return;
                }
                const password = encPasswordInput.value;
                if (password === null || password != password) {
                    spnEncstatus.classList.add("redspan");
		            spnEncstatus.innerHTML='<p>File tidak terenkripsi.</p>';
                    return;
                }
        
                // Read in the data (registering the callback for when it's done)
                const reader = new FileReader();
                reader.onload = () => {
                    if (typeof reader.result === "string") {
                        showError("Got an ArrayBuffer not a string for encryption. This is a bug... sorry!");
                        return;
                    }
                    const fileData = new Uint8Array(reader.result);
                    const salt = window.crypto.getRandomValues(new Uint8Array(32));
                    console.log(salt);
                    getKey(password, salt)
                    .then(encryptionKey => {
                        const iv = window.crypto.getRandomValues(new Uint8Array(16));
                        console.log(iv);
                        window.crypto.subtle.encrypt(
                            {
                                name: "AES-GCM",
                                iv,
                            },
                            encryptionKey,
                            fileData
                        )
                        .then(encrypted => {
                            const encryptedBytes = new Uint8Array(encrypted);
                            const packedData = new Uint8Array(encryptedBytes.length + salt.length + iv.length);
                            packedData.set(salt);
                            packedData.set(iv, salt.length);
                            packedData.set(encryptedBytes, salt.length + iv.length);
                            const output = new Blob([packedData.buffer], {type: "application/octet-stream", endings: "transparent"});
                            aEncsavefile.href = URL.createObjectURL(output);
                            aEncsavefile.download = `${encInput.files[0].name}.ran`
                            spnEncstatus.classList.add("greenspan");
		                    spnEncstatus.innerHTML='<p>File encrypted.</p>';
                            aEncsavefile.hidden=false;
                            
                        })
                    })
                }
                reader.readAsArrayBuffer(encInput.files[0]);
            });
        
            /**@type {HTMLInputElement}*/
            const decInput = document.querySelector("#decrypt");
            /**@type {HTMLInputElement}*/
            const decPasswordInput = document.querySelector("#decpassword");
            document.querySelector("#decryptbutton").addEventListener("click", () => {
        
                if (decInput.files == null || decInput.files[0] == null) {
                    spnDecstatus.classList.add("redspan");
		            spnDecstatus.innerHTML='<p>File Kosong,mohon tambahkan file.</p>';
                    return;
                }
                const password = decPasswordInput.value;
                
        
                const reader = new FileReader();
                reader.onload = () => {
                    if (typeof reader.result === "string") {
                        showError("Got a string not an ArrayBuffer for encryption. This is a bug... sorry!");
                        return;
                    }
                    
                    const rawBinData = new Uint8Array(reader.result);
                    const salt = rawBinData.slice(0, 32);
                    const iv = rawBinData.slice(32, 32 + 16);
                    const payload = rawBinData.slice(32 + 16);

                    getKey(password, salt)
                    .then(encryptionKey => {
                        window.crypto.subtle.decrypt(
                            {
                                name: "AES-GCM",
                                iv,
                            },
                            encryptionKey,
                            payload
                        )
                        .then(decrypted => {
                            const blob = new Blob([decrypted], {type: "application/octet-stream"});                          
                            aDecsavefile.href = URL.createObjectURL(blob);;
                            aDecsavefile.download = decInput.files[0].name.replace(/\.ran$/, "");
                            spnDecstatus.classList.add("greenspan");
		                    spnDecstatus.innerHTML='<p>File decrypted.</p>';
		                    aDecsavefile.hidden=false;
                            
                        })
                    })
                }
                reader.readAsArrayBuffer(decInput.files[0]);
            });
        
        </script>
	</body>
</html>