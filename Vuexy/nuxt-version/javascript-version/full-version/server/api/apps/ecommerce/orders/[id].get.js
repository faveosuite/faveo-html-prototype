import { db } from '@/server/fake-db/apps/ecommerce'

export default defineEventHandler(event => {
  const orderId = getIntId(event, 'Customer id is required to get customer details')
  const id = Number(orderId)
  try {
    const order = db.orderData.find(e => e.order === id)
    if (order)
      setResponseStatus(event, 200)
    
    return order
  }
  catch (error) {
    setResponseStatus(event, 404)
  }
})
