<%@ Page Language="C#" ContentType="text/html" %>
<%@ Import Namespace="System.Data" %>
<%@ Import Namespace="System.IO" %>
<script language="C#" runat="server">
// default directory /docs/
    protected void Page_Load(Object Src, EventArgs E)
    {
        string strDir = "\\";
        try {
            if (Request.QueryString["d"] != null && Request.QueryString["d"].Length != 0) {
                strDir = Request.QueryString["d"];
            }
            string strParent = strDir.Substring(0,strDir.LastIndexOf("\\"));

            if (strDir.Replace("\\\\","\\").Equals("\\"))
            {
                LitUpLink.Text = "";
            } else
            {
                  LitUpLink.Text = "<div class=\"col-3 text-center small\"><p><a href=\"filebrowser.aspx?d="+strParent.Replace("\\\\","\\")  + "\"><i class=\"far fa-chevron-left fa-4x text-secondary\" ></i></a></p><p>Up</p></div>";
            }

            txtCurrentDir.Text = "Directory: <b>"+strDir.Replace("\\\\","\\") + "</b>";

		
            DirectoryInfo DirInfo = new DirectoryInfo(Server.MapPath("\\docs\\" + strDir));
            DirectoryInfo[] subDirs = DirInfo.GetDirectories();
            FileInfo[] Files = DirInfo.GetFiles();

            DataTable dt = new DataTable();
            dt.Columns.Add(new DataColumn("FileDirectory", typeof(System.String)));
                      
            
            for (int i=0; i<=subDirs.Length-1; i++) {
                DataRow dro = dt.NewRow();
                dro[0] = subDirs[i].Name;
                dt.Rows.Add(dro);

            }

            DataView dvDirs = new DataView(dt);
            dvDirs.Sort = "FileDirectory";
            dirrep.DataSource  = dvDirs;
            dirrep.DataBind();
            dvDirs.Dispose();

            // do files
            DataTable dtfiles = new DataTable();
            DataColumn dcfiles = new DataColumn("FileName", typeof(System.String));
            DataColumn dc1files = new DataColumn("FilePath", typeof(System.String));
            DataColumn dc2files = new DataColumn("FileSize", typeof(System.String));
            DataColumn dc3files = new DataColumn("FileDate", typeof(System.String));
            dtfiles.Columns.Add(dcfiles);
            dtfiles.Columns.Add(dc1files);
            dtfiles.Columns.Add(dc2files);
            dtfiles.Columns.Add(dc3files);

            for (int i=0; i<=Files.Length-1; i++) {

                DataRow dro = dtfiles.NewRow();
                dro[0] = Files[i].Name;
                dro[1] = GetFolderPath().Replace("\\\\","\\") + Files[i].Name;
                dro[2] = Files[i].Length.ToString().DoSizeFormat();
                dro[3] = Files[i].LastWriteTime;

                dtfiles.Rows.Add(dro);

            }

            if (dtfiles.Rows.Count == 0) {
                txtNofiles.Text = "<div class=\"noimagebox\">No Files Found</div>";
            }
            DataView dvFiles = new DataView(dtfiles);
            dvFiles.Sort = "FileName";
            filerep.DataSource  = dvFiles;
            filerep.DataBind();
            dvFiles.Dispose();

        }
        catch (Exception e){
            txtCurrentDir.Text = "Error retrieving directory info: "+e.Message;
        }
    }
  
    public string GetFolderPath() {
        if (Request.QueryString["d"] != null && Request.QueryString["d"].Length != 0) {
            return  Request.QueryString["d"].Replace("\\\\","\\") + "\\";
        }
        return "\\";

    }
    

    public string MakeIcon(string FileName) {
        string returnstring = "";
        if (FileName.ToLower().EndsWith("jpg") || FileName.EndsWith("gif") || FileName.EndsWith("svg") || FileName.EndsWith("png") ) {
            returnstring =   "/docs" + FileName.Replace("\\","/");
        } else {
            returnstring = "/images/file-alt.svg";
        }
        return returnstring;
    }
</script>
<html lang="en">
<head runat="server">
    <title>Image Browser</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/css/bootstrap.min.css" />
    <link rel="stylesheet" href="/css/font-awesome.min.css">
    <link rel="stylesheet" href="/css/fa-regular.min.css">
<script> 
function InsertImage(imgpath) 
{
    parent.AddFile('/docs' + imgpath);
}
</script>
    <style>
       body { overflow-y: scroll;
overflow-x: hidden;}

      i.far {
    font-style: normal;
} 
    </style>
</head>
<body>
<form runat="server" id="Form1">
<div id="header" class="mb-5">Photo Browser: <asp:Label ID="txtCurrentDir" runat="server" />
</div>
    <div class="row">
        <asp:Literal ID="LitUpLink" runat="server"></asp:Literal>
	      <ASP:Repeater runat="server" ID="dirrep">
            <ItemTemplate>
              <div class="col-3 text-center small"><p><a href="filebrowser.aspx?d=<%= GetFolderPath().Replace("\\\\","\\") %><%# DataBinder.Eval(Container.DataItem, "FileDirectory") %>"><i class="far fa-folder fa-4x text-secondary" ></i></a></p>
                <p><%# DataBinder.Eval(Container.DataItem, "FileDirectory") %></p>
              </div>
            </ItemTemplate>
          
          </ASP:Repeater>
	
	  <ASP:Repeater runat="server" ID="filerep">
        <ItemTemplate>
	   <div class="col-3 text-center small"><p><a href="#" onClick="InsertImage('<%# ((string) DataBinder.Eval(Container.DataItem, "FilePath")).Replace("\\","/") %>');"><img src="<%# MakeIcon((String)(DataBinder.Eval(Container.DataItem,"FilePath"))) %>" alt="Select File or Image" width="50" height="50" border="0"></a></p>
                <p><%# DataBinder.Eval(Container.DataItem, "FileName") %><br /><%# DataBinder.Eval(Container.DataItem, "FileSize") %><br /><%# DataBinder.Eval(Container.DataItem, "FileDate") %></p>
	   </div></ItemTemplate>
		 
      </ASP:Repeater><asp:Label ID="txtNofiles" runat="server" />
        </div>
</form>
</body>
</html>