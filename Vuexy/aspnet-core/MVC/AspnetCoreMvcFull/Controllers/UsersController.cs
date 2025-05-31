using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using AspnetCoreMvcFull.Models;

namespace AspnetCoreMvcFull.Controllers;

public class UsersController : Controller
{
  public IActionResult List() => View();
  public IActionResult ViewAccount() => View();
  public IActionResult ViewBilling() => View();
  public IActionResult ViewConnections() => View();
  public IActionResult ViewNotifications() => View();
  public IActionResult ViewSecurity() => View();
}
