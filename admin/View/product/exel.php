<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADD CATEGORY</title>
    <style>
        .ctn{
            margin-left: 320px;
            margin-top: 30px;
            border: 1px solid black;
            width: 1160px;
            border-radius: 4px;
            height: auto;
            position: relative;
        }
        .ctn>h1{
            margin: 10px 0 0 20px;
        }
      
        .deletes{
            background-color: orange;
            color: white;
            border: none;
            width: 130px;
            border-radius: 4px;
            height: 30px;
            margin-left: 4px;
            cursor: pointer;

        }
        .update{
            background-color: lightblue;
            color: black;
            border: none;
            width: 130px;
            border-radius: 4px;
            height: 30px;
            margin-left: 4px;
            cursor: pointer;

        }
       a>button{
        background-color: lightgreen;
            color: black;
            border: none;
            width: 130px;
            border-radius: 4px;
            height: 30px;
            margin-left: 4px;
            cursor: pointer;
            display: inline;
       }
       form{
        margin-top: 50px;
        margin-bottom: 100px;
        margin-left: 50px;
       }
       .ip{
        width: 500px;
        height: 35px;
        border: none;
        border-left: 2px solid orange;
        background-color: transparent;
        border-bottom:1px solid blue ;
        padding: 20px;

       }
       textarea{
        width: 500px;
        height: 100px;
        border: none;
        border-left: 2px solid orange;
        background-color: transparent;
        border-bottom:1px solid blue ;
        padding: 20px;

       }
       ::placeholder{
        font-weight: bold;
        
       }
       .fileImg {
            width: 490px;
            height: 70px;
            border: 3px solid white;
            background-color: gray;
        }

        .fileImg>.file {
            position: absolute;
            display: hidden;
        }

        .fileImg>label {
            font-size: 50px;
            position: absolute;
            z-index: 5;
            height: 65px;
            background-color: white;
            width: 486px;
            text-align: center;
            cursor: pointer;
            border-radius: 5px;
        }
       select{
        width: 200px;
        height: 35px;
        color:red;
        border: 1px solid blue;

       }
     

    </style>
</head>
<body>

    <div class="ctn">
        <h1>ADD PRODUCT WITH EXCEL</h1>
        <form action="?href=addProductExel" method="post" enctype="multipart/form-data">
          
          
           <div class='fileImg'>
           <label for="file" class='label'><ion-icon name="cloud-download-outline"></ion-icon></label>
            <input type="file" name='file' id="file" class="file">
           </div>
            <br>
            <input type="submit" value="Submit" class="update" name="import">
             <input type="reset" value="Reset" class="deletes"> 
             <a href="index.php?href=product"><button disabled>List Product</button></a>
        </form>

        <!-- <div id="app">
  <input type="file" @change="handleDrop($event.target.files)">
  <nav class="container">
    <div>
      <table class="table table-sm table-hover">
        <tr>
          <th v-for="header in importData.headers">
            {{ header.name }}
          </th>
        </tr>
        <tr v-for="row in importData.data">
          <td v-for="column in Object.keys(row)">{{ row[column] }}</td>
        </tr>
        
      </table>
    </div>
    <div>
      <pre>
      {{ importData }}
      </pre>      
    </div>
  </nav>
</div>
    </div>
</body>
</html> -->
<!-- <script>
    function fixdata(data) {
	var o = "", l = 0, w = 10240;
	for(; l<data.byteLength/w; ++l) o+=String.fromCharCode.apply(null,new Uint8Array(data.slice(l*w,l*w+w)));
	o+=String.fromCharCode.apply(null, new Uint8Array(data.slice(l*w)));
	return o;
}
function get_header_row(sheet) {
    var headers = [], range = XLSX.utils.decode_range(sheet['!ref']);
    var C, R = range.s.r; /* start in the first row */
    for(C = range.s.c; C <= range.e.c; ++C) { /* walk every column in the range */
        var cell = sheet[XLSX.utils.encode_cell({c:C, r:R})] /* find the cell in the first row */
        var hdr = "XXX"; // <-- replace with your desired default 
        if(cell && cell.t) {
          hdr = XLSX.utils.format_cell(cell);
        } else {
          continue
        }
        let column = {
          field: hdr,
          name: hdr,
          label: hdr
        }
        headers.push(column);
    }
    return headers;
}

var app = new Vue({
  el: '#app',
    data: {
      importData: {
        headers: [],
        data: [],
      },                  
    },
    methods: {
      handleDrop(fileList) {
        var f = fileList[0];
        var reader = new FileReader(), name = f.name
        reader.onload = (e) => {
          var results, 
              data = e.target.result, 
              fixedData = fixdata(data), 
              workbook=XLSX.read(btoa(fixedData), {type: 'base64'}), 
              firstSheetName = workbook.SheetNames[0], 
              worksheet = workbook.Sheets[firstSheetName];
          this.importData.headers = get_header_row(worksheet);
          results = XLSX.utils.sheet_to_json(worksheet);
          this.importData.data = results;
        };
        reader.readAsArrayBuffer(f);
      },              
    }
  })
</script> -->