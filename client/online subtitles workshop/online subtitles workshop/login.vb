﻿
Public Class login

    Private Sub Form1_Load(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles MyBase.Load

    End Sub

    Function AuthUser(ByVal url As String, ByVal Username As String, ByVal Password As String) As Boolean
        Dim response, query As String
        query = String.Format("username={0}&password={1}", System.Web.HttpUtility.UrlEncode(Username), System.Web.HttpUtility.UrlEncode(Password))
        response = GetData(url, Username)
        'If Response.Contains("Correct") Then
        MessageBox.Show(response)
    End Function


    Private Sub TextBox2_TextChanged(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles TxtUsername.TextChanged
        TxtUsername.Text = TxtUsername.Text.Replace(" ", "")
        TxtUsername.Select(TxtUsername.Text.Length, 0)
    End Sub

    Private Sub Button1_Click(ByVal sender As System.Object, ByVal e As System.EventArgs) Handles Button1.Click
        If TxtUsername.TextLength = 0 Then
            MessageBox.Show("enter username")
            Return
        End If
        If TxtPassword.TextLength = 0 Then
            MessageBox.Show("enter password")
            Return
        End If
        If TxtUrl.TextLength = 0 Then
            MessageBox.Show("enter url")
            Return
        End If

        Try
            Dim query As String = "page=query&sec=client&ssec=QueryClient&h=login&u=" & TxtUsername.Text & "&p=" & TxtPassword.Text
            MessageBox.Show(GetData("http://localhost/new/trunk/site" & "/index.php?", query).ToString)
            'MessageBox.Show(GetData("http://localhost/new/trunk/site" & "/index.php?", "page=cron&sec=run&ssec=cron&h=runall").ToString)
        Catch ex As Exception
            MessageBox.Show("login failed" & ex.Message)
        End Try
    End Sub
End Class