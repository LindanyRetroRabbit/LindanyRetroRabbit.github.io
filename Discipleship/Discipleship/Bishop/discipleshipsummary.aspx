﻿<%@ Page Title="" Language="C#" MasterPageFile="~/bishop.Master" AutoEventWireup="true" CodeBehind="discipleshipsummary.aspx.cs" Inherits="Discipleship.Bishop.discipleshipsummary" %>
<asp:Content ID="Content1" ContentPlaceHolderID="head" runat="server">
</asp:Content>
<asp:Content ID="Content2" ContentPlaceHolderID="ContentPlaceHolder1" runat="server">
    <p>
    </p>
    
    <p>
        <asp:FormView ID="FormView1" align="right" runat="server" DataSourceID="SqlDataSource1">
            <EditItemTemplate>
                fName:
                <asp:TextBox ID="fNameTextBox" runat="server" Text='<%# Bind("fName") %>' />
                <br />
                Title:
                <asp:TextBox ID="TitleTextBox" runat="server" Text='<%# Bind("Title") %>' />
                <br />
                Surname:
                <asp:TextBox ID="SurnameTextBox" runat="server" Text='<%# Bind("Surname") %>' />
                <br />
                <asp:LinkButton ID="UpdateButton" runat="server" CausesValidation="True" CommandName="Update" Text="Update" />
                &nbsp;<asp:LinkButton ID="UpdateCancelButton" runat="server" CausesValidation="False" CommandName="Cancel" Text="Cancel" />
            </EditItemTemplate>
            <InsertItemTemplate>
                fName:
                <asp:TextBox ID="fNameTextBox" runat="server" Text='<%# Bind("fName") %>' />
                <br />
                Title:
                <asp:TextBox ID="TitleTextBox" runat="server" Text='<%# Bind("Title") %>' />
                <br />
                Surname:
                <asp:TextBox ID="SurnameTextBox" runat="server" Text='<%# Bind("Surname") %>' />
                <br />
                <asp:LinkButton ID="InsertButton" runat="server" CausesValidation="True" CommandName="Insert" Text="Insert" />
                &nbsp;<asp:LinkButton ID="InsertCancelButton" runat="server" CausesValidation="False" CommandName="Cancel" Text="Cancel" />
            </InsertItemTemplate>
            <ItemTemplate>
                <strong>Sign In: </strong>
                <asp:Label ID="TitleLabel" runat="server" Text='<%# Bind("Title") %>' />
                &nbsp;|
                <asp:Label ID="fNameLabel" runat="server" Text='<%# Bind("fName") %>' />
                &nbsp;<asp:Label ID="SurnameLabel" runat="server" Text='<%# Bind("Surname") %>' />
                <br />
            </ItemTemplate>
        </asp:FormView>
    </p>
    <br />
    <br />
    <br />
    <br />
    <p>
        <asp:SqlDataSource ID="SqlDataSource1" runat="server" ConnectionString="<%$ ConnectionStrings:ConnectionString %>" SelectCommand="SELECT [fName], [Title], [Surname] FROM [Users] WHERE ([Username] = @Username)">
            <SelectParameters>
                <asp:ControlParameter ControlID="lblUser" Name="Username" PropertyName="Text" Type="String" />
            </SelectParameters>
        </asp:SqlDataSource>
    </p>
   
    <p>
        <asp:Label ID="lblUser" runat="server" Text="..."></asp:Label>
    </p>
</asp:Content>
