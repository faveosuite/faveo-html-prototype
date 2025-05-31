using System;
using System.Collections.Generic;
using System.Linq;
using System.Threading.Tasks;
using Microsoft.EntityFrameworkCore;
using AspnetCoreMvcFull.Models;

namespace AspnetCoreMvcFull.Data
{
    public class AspnetCoreMvcFullContext : DbContext
    {
        public AspnetCoreMvcFullContext (DbContextOptions<AspnetCoreMvcFullContext> options)
            : base(options)
        {
        }
        public DbSet<AspnetCoreMvcFull.Models.Transactions> Transactions { get; set; } = default!;
    }
}
