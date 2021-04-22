<?php
namespace App\Controller;
use App\Entity\Product;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class OrderController extends AbstractController
{
    /**
     * @Route("/cart/product", name="order_add_product_to_cart")
     * @Method("POST")
     */
    public function addProductToCartAction(Product $product)
    {
        $this->get('shopping_cart')
            ->addProduct($product);
        $this->addFlash('success', 'Product added!');
        return $this->redirectToRoute('order_checkout');
    }
    /**
     * @Route("/checkout", name="order_checkout")
     * @Security("is_granted('ROLE_USER')")
     */
    public function checkoutAction()
    {
        $products = $this->get('shopping_cart')->getProducts();
        return $this->render('commerce/index.html.twig', array(
            'products' => $products,
            'cart' => $this->get('shopping_cart')
        ));
    }
}