<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<style type="text/css">
        
        .auto-style3 {
            width: 407px;
        }

        .auto-style4 {
            margin-left: 0px;
            margin-right: 0px;
            margin-top: 54px;
        }
    </style>

    <br /><br /><br />

    <div class="row">
        <div class="col bg-dark" > 
            <asp:Label ID="Label2" runat="server" Text="Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum." ForeColor="White" ></asp:Label> 
        </div>
           
         <div class="col" >
    <div class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
    <di1v class="carousel-item active">
                    <img class="d-block w-100" src="Images/Niva.jpg" alt="First slide" />
  </di1v>
      <div class="carousel-item">
                    <img class="d-block w-100" src="Images/kaplumbaga.jpeg" alt="Second slide" />
  </div>

        </div>
        <a class="carousel-control-prev" href="#~/Images/Niva.jpg" role="button" data-slide="prev">
    <span class="carousel-control-prev" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#~/Images/kaplumbaga.jpg" role="button" data-slide="next">
    <span class="carousel-control-next" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
   </div>
            
              <%--  <asp:Image ID="Image1" runat="server" ImageUrl="~/Images/Niva.jpg" />--%>
            

         </div>
       
     </div>
    <div class="row">
    <!-- <asp:Repeater ID="Repeater1" runat="server"  OnItemCommand="Repeater_ItemCommand">
        
        <HeaderTemplate >
            <div >
            <table class="table table-dark">
            <tr class="text-center">
                            <th scope="col" >
                                <b>ModelAdı</b>

                            </th>
                            <th scope="col">
                                <b>MarkaAdı </b>
                            </th>
                            <th scope="col">
                                <b>yil </b>
                            </th>
                            <th scope="col">
                                <b>Vites  </b>
                            </th>
                            <th scope="col">
                                <b>Plaka </b>
                            </th>
                
                            <th scope="col">
                                <b>Araç Detayı</b>
                            </th>

                            <th scope="col">
                                <b>Düzenle </b>
                            </th>
                            <th scope="col">
                                <b>Sil </b>
                            </th>

                        </tr>

           
            </div>
        </HeaderTemplate>
        <ItemTemplate>            
            <tr>
                        <td>
                            
                            <%# DataBinder.Eval(Container.DataItem,"ModelAd") %>
                        
                        </td>
                        <td>
                            <%# DataBinder.Eval(Container.DataItem,"MarkaAd")%>
                        </td>
                        <td>
                            <%# DataBinder.Eval(Container.DataItem,"Yil")%>
                        </td>
                        <td>
                            <%# DataBinder.Eval(Container.DataItem,"Vites")%>
                        </td>
                        <td>
                            <%# DataBinder.Eval(Container.DataItem,"Plaka")%>
                        </td>
                
                        <td>
                            <asp:Button ID="BtnDetay" runat="server" class="btn btn-primary" data-toggle="button" BackColor="Blue" Text="Detay" CommandName="Detay"  CommandArgument='<%# Eval("Id") %>'  />
                        </td>
                        <td>
                            <asp:Button ID="BtnDuzenle" runat="server" class="btn btn-primary" data-toggle="button" BackColor="Orange" Text="Düzenle" CommandName="Duzenle"  CommandArgument='<%# Eval("Id") %>' />
                        </td>
                        <td>
                            <asp:Button ID="BtnSil" runat="server" class="btn btn-primary" data-toggle="button" BackColor="Red" Text="Sil" CommandName="Sil" CommandArgument='<%# Eval("Id") %>' />
                        </td>
                    </tr>
       </ItemTemplate>
        <FooterTemplate>
            </table>
        </FooterTemplate>
    </asp:Repeater> -->
  </div>

    
    <div class=" row">
            <asp:Button ID="BtnKayit" runat="server" class="btn btn-primary" data-toggle="button" Text="Yeni Kayıt Oluştur"  BackColor="DarkOrange" OnClick="BtnKayit_Click" />
            <br />
            </div>





</body>