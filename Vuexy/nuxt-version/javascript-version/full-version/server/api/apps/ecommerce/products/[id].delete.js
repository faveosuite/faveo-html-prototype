import { db } from '@/server/fake-db/apps/ecommerce'

export default defineEventHandler(event => {
  const productId = getIntId(event, 'Product id is required to delete product')
  const id = Number(productId)
  const productIndex = db.products.findIndex(e => e.id === id)
  if (productIndex >= 0) {
    db.products.splice(productIndex, 1)
    setResponseStatus(event, 204)
    
    return null
  }
  setResponseStatus(event, 204)
})
