using System.Diagnostics;
using Microsoft.AspNetCore.Mvc;
using AspnetCoreMvcFull.Models;

namespace AspnetCoreMvcFull.Controllers;

public class AuthController : Controller
{
  public IActionResult ForgotPasswordBasic() => View();
  public IActionResult ForgotPasswordCover() => View();
  public IActionResult LoginBasic() => View();
  public IActionResult LoginCover() => View();
  public IActionResult RegisterBasic() => View();
  public IActionResult RegisterCover() => View();
  public IActionResult RegisterMultiSteps() => View();
  public IActionResult ResetPasswordBasic() => View();
  public IActionResult ResetPasswordCover() => View();
  public IActionResult TwoStepsBasic() => View();
  public IActionResult TwoStepsCover() => View();
  public IActionResult VerifyEmailBasic() => View();
  public IActionResult VerifyEmailCover() => View();
}
