using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using AspnetCoreMvcFull.Models;

namespace AspnetCoreMvcFull.Controllers;

public class ExtendedUiController : Controller
{
  public IActionResult Avatar() => View();
  public IActionResult BlockUi() => View();
  public IActionResult DragDrop() => View();
  public IActionResult MediaPlayer() => View();
  public IActionResult Misc() => View();
  public IActionResult PerfectScrollbar() => View();
  public IActionResult StarRatings() => View();
  public IActionResult SweetAlert2() => View();
  public IActionResult TextDivider() => View();
  public IActionResult TimelineBasic() => View();
  public IActionResult TimelineFullScreen() => View();
  public IActionResult Tour() => View();
  public IActionResult Treeview() => View();
}
