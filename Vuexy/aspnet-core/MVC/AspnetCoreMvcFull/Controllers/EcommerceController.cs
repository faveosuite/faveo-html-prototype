using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using AspnetCoreMvcFull.Models;

namespace AspnetCoreMvcFull.Controllers;

public class EcommerceController : Controller
{
  public IActionResult Dashboard() => View();
  public IActionResult CustomerAll() => View();
  public IActionResult CustomerDetailsBilling() => View();
  public IActionResult CustomerDetailsNotifications() => View();
  public IActionResult CustomerDetailsOverview() => View();
  public IActionResult CustomerDetailsSecurity() => View();
  public IActionResult ProductAdd() => View();
  public IActionResult ProductCategoryList() => View();
  public IActionResult ProductList() => View();
  public IActionResult OrderList() => View();
  public IActionResult OrderDetails() => View();
  public IActionResult SettingsCheckout() => View();
  public IActionResult SettingsLocations() => View();
  public IActionResult SettingsShipping() => View();
  public IActionResult SettingsPayments() => View();
  public IActionResult SettingsNotifications() => View();
  public IActionResult SettingsStoreDetails() => View();
  public IActionResult Referrals() => View();
  public IActionResult Reviews() => View();
}
