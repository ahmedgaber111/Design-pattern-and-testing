<?php

namespace App\Behavioural\State;

class OrderContext
{
    /**
     * @var User
     */
    private User$client;
    /**
     * @var State
     */
    private State$state;
    /**
     * @var array
     */
    private array$orderlogs;

    public function __construct(User$client)
    {
        $this->client=$client;
        $this->state=new CreatedState();
    }

    /**
     * @return User
     */
    public function getClient(): User
    {
        return $this->client;
    }
    public function OrderProceed()
    {
        $this->state->setOrderContext($this);
        $this->state->proceed();
        return$this->state;
    }
    /**
     * @return array
     */
    public function getOrderlogs(): array
    {
        return $this->orderlogs;
    }

    public function AddToOrderlogs(string $logs)
    {
        $this->orderlogs[] = $logs;
    }
    /**
     * @param State $state
     */
    public function setState(CreatedState|State $state): void
    {
        $this->state = $state;
    }

    /**
     * @return State
     */
    public function getState(): CreatedState|State
    {
        return $this->state;
    }


}
