fixer ces erreur  Symfony Exception
 Symfony Docs
ResourceNotFoundException  NotFoundHttpException
HTTP 404 Not Found
No route found for "GET http://127.0.0.1:8000/dashboard/charts.html" (from "http://127.0.0.1:8000/dashboard/echanges")
Symfony\Component\HttpKernel\Exception\
NotFoundHttpException
Show exception properties
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\http-kernel\EventListener\RouterListener.php (line 127)
            if ($referer = $request->headers->get('referer')) {                $message .= sprintf(' (from "%s")', $referer);            }            throw new NotFoundHttpException($message, $e);        } catch (MethodNotAllowedException $e) {            $message = sprintf('No route found for "%s %s": Method Not Allowed (Allow: %s)', $request->getMethod(), $request->getUriForPath($request->getPathInfo()), implode(', ', $e->getAllowedMethods()));            throw new MethodNotAllowedHttpException($e->getAllowedMethods(), $message, $e);        }
RouterListener->onKernelRequest(object(RequestEvent), 'kernel.request', object(TraceableEventDispatcher))
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\event-dispatcher\Debug\WrappedListener.php (line 116)
WrappedListener->__invoke(object(RequestEvent), 'kernel.request', object(TraceableEventDispatcher))
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\event-dispatcher\EventDispatcher.php (line 220)
EventDispatcher->callListeners(array(object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener)), 'kernel.request', object(RequestEvent))
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\event-dispatcher\EventDispatcher.php (line 56)
EventDispatcher->dispatch(object(RequestEvent), 'kernel.request')
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\event-dispatcher\Debug\TraceableEventDispatcher.php (line 139)
TraceableEventDispatcher->dispatch(object(RequestEvent), 'kernel.request')
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\http-kernel\HttpKernel.php (line 157)
HttpKernel->handleRaw(object(Request), 1)
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\http-kernel\HttpKernel.php (line 76)
HttpKernel->handle(object(Request), 1, true)
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\http-kernel\Kernel.php (line 197)
Kernel->handle(object(Request))
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\runtime\Runner\Symfony\HttpKernelRunner.php (line 35)
HttpKernelRunner->run()
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\autoload_runtime.php (line 32)
require_once('C:\\Users\\AXELL\\Desktop\\sy proj\\SwapCircle\\vendor\\autoload_runtime.php')
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\public\index.php (line 5)
Symfony\Component\Routing\Exception\
ResourceNotFoundException
No routes found for "/dashboard/charts.html/".

ResourceNotFoundException  NotFoundHttpException
HTTP 404 Not Found
No route found for "GET http://127.0.0.1:8000/dashboard/settings.html" (from "http://127.0.0.1:8000/dashboard/echanges")
Symfony\Component\HttpKernel\Exception\
NotFoundHttpException
Show exception properties
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\http-kernel\EventListener\RouterListener.php (line 127)
            if ($referer = $request->headers->get('referer')) {                $message .= sprintf(' (from "%s")', $referer);            }            throw new NotFoundHttpException($message, $e);        } catch (MethodNotAllowedException $e) {            $message = sprintf('No route found for "%s %s": Method Not Allowed (Allow: %s)', $request->getMethod(), $request->getUriForPath($request->getPathInfo()), implode(', ', $e->getAllowedMethods()));            throw new MethodNotAllowedHttpException($e->getAllowedMethods(), $message, $e);        }
RouterListener->onKernelRequest(object(RequestEvent), 'kernel.request', object(TraceableEventDispatcher))
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\event-dispatcher\Debug\WrappedListener.php (line 116)
WrappedListener->__invoke(object(RequestEvent), 'kernel.request', object(TraceableEventDispatcher))
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\event-dispatcher\EventDispatcher.php (line 220)
EventDispatcher->callListeners(array(object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener)), 'kernel.request', object(RequestEvent))
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\event-dispatcher\EventDispatcher.php (line 56)
EventDispatcher->dispatch(object(RequestEvent), 'kernel.request')
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\event-dispatcher\Debug\TraceableEventDispatcher.php (line 139)
TraceableEventDispatcher->dispatch(object(RequestEvent), 'kernel.request')
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\http-kernel\HttpKernel.php (line 157)
HttpKernel->handleRaw(object(Request), 1)
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\http-kernel\HttpKernel.php (line 76)
HttpKernel->handle(object(Request), 1, true)
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\http-kernel\Kernel.php (line 197)
Kernel->handle(object(Request))
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\runtime\Runner\Symfony\HttpKernelRunner.php (line 35)
HttpKernelRunner->run()
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\autoload_runtime.php (line 32)
require_once('C:\\Users\\AXELL\\Desktop\\sy proj\\SwapCircle\\vendor\\autoload_runtime.php')
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\public\index.php (line 5)
Symfony\Component\Routing\Exception\
ResourceNotFoundException
No routes found for "/dashboard/settings.html/".


ResourceNotFoundException  NotFoundHttpException
HTTP 404 Not Found
No route found for "GET http://127.0.0.1:8000/dashboard/account.html" (from "http://127.0.0.1:8000/dashboard/echanges")
Symfony\Component\HttpKernel\Exception\
NotFoundHttpException
Show exception properties
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\http-kernel\EventListener\RouterListener.php (line 127)
            if ($referer = $request->headers->get('referer')) {                $message .= sprintf(' (from "%s")', $referer);            }            throw new NotFoundHttpException($message, $e);        } catch (MethodNotAllowedException $e) {            $message = sprintf('No route found for "%s %s": Method Not Allowed (Allow: %s)', $request->getMethod(), $request->getUriForPath($request->getPathInfo()), implode(', ', $e->getAllowedMethods()));            throw new MethodNotAllowedHttpException($e->getAllowedMethods(), $message, $e);        }
RouterListener->onKernelRequest(object(RequestEvent), 'kernel.request', object(TraceableEventDispatcher))
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\event-dispatcher\Debug\WrappedListener.php (line 116)
WrappedListener->__invoke(object(RequestEvent), 'kernel.request', object(TraceableEventDispatcher))
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\event-dispatcher\EventDispatcher.php (line 220)
EventDispatcher->callListeners(array(object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener)), 'kernel.request', object(RequestEvent))
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\event-dispatcher\EventDispatcher.php (line 56)
EventDispatcher->dispatch(object(RequestEvent), 'kernel.request')
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\event-dispatcher\Debug\TraceableEventDispatcher.php (line 139)
TraceableEventDispatcher->dispatch(object(RequestEvent), 'kernel.request')
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\http-kernel\HttpKernel.php (line 157)
HttpKernel->handleRaw(object(Request), 1)
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\http-kernel\HttpKernel.php (line 76)
HttpKernel->handle(object(Request), 1, true)
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\http-kernel\Kernel.php (line 197)
Kernel->handle(object(Request))
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\runtime\Runner\Symfony\HttpKernelRunner.php (line 35)
HttpKernelRunner->run()
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\autoload_runtime.php (line 32)
require_once('C:\\Users\\AXELL\\Desktop\\sy proj\\SwapCircle\\vendor\\autoload_runtime.php')
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\public\index.php (line 5)
Symfony\Component\Routing\Exception\
ResourceNotFoundException
No routes found for "/dashboard/account.html/".

ResourceNotFoundException  NotFoundHttpException
HTTP 404 Not Found
No route found for "GET http://127.0.0.1:8000/dashboard/notifications.html" (from "http://127.0.0.1:8000/dashboard/echanges")
Symfony\Component\HttpKernel\Exception\
NotFoundHttpException
Show exception properties
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\http-kernel\EventListener\RouterListener.php (line 127)
            if ($referer = $request->headers->get('referer')) {                $message .= sprintf(' (from "%s")', $referer);            }            throw new NotFoundHttpException($message, $e);        } catch (MethodNotAllowedException $e) {            $message = sprintf('No route found for "%s %s": Method Not Allowed (Allow: %s)', $request->getMethod(), $request->getUriForPath($request->getPathInfo()), implode(', ', $e->getAllowedMethods()));            throw new MethodNotAllowedHttpException($e->getAllowedMethods(), $message, $e);        }
RouterListener->onKernelRequest(object(RequestEvent), 'kernel.request', object(TraceableEventDispatcher))
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\event-dispatcher\Debug\WrappedListener.php (line 116)
WrappedListener->__invoke(object(RequestEvent), 'kernel.request', object(TraceableEventDispatcher))
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\event-dispatcher\EventDispatcher.php (line 220)
EventDispatcher->callListeners(array(object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener), object(WrappedListener)), 'kernel.request', object(RequestEvent))
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\event-dispatcher\EventDispatcher.php (line 56)
EventDispatcher->dispatch(object(RequestEvent), 'kernel.request')
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\event-dispatcher\Debug\TraceableEventDispatcher.php (line 139)
TraceableEventDispatcher->dispatch(object(RequestEvent), 'kernel.request')
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\http-kernel\HttpKernel.php (line 157)
HttpKernel->handleRaw(object(Request), 1)
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\http-kernel\HttpKernel.php (line 76)
HttpKernel->handle(object(Request), 1, true)
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\http-kernel\Kernel.php (line 197)
Kernel->handle(object(Request))
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\symfony\runtime\Runner\Symfony\HttpKernelRunner.php (line 35)
HttpKernelRunner->run()
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\vendor\autoload_runtime.php (line 32)
require_once('C:\\Users\\AXELL\\Desktop\\sy proj\\SwapCircle\\vendor\\autoload_runtime.php')
in C:\Users\AXELL\Desktop\sy proj\SwapCircle\public\index.php (line 5)
Symfony\Component\Routing\Exception\
ResourceNotFoundException
No routes found for "/dashboard/notifications.html/".

